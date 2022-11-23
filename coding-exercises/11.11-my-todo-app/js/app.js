console.log("app.js connected")

import TaskList from './list.js';

export default class App {

// (1) Constructor - e.g. login, date, initialize
	constructor(name) {
		this.name = name
		this.listList = [];

		this.$form = document.querySelector('.main-form');

		this.initializeListList();
		
		this.renderAllLists();
		this.listEventHandler();
	}

// (2) Local data API & Initialize
	setData() {
		localStorage.setItem("listListData", JSON.stringify(this.listList, null, 2) );
	}
	getData() {
		return JSON.parse(localStorage.getItem('listListData'));
	}
	initializeListList() {
		let data = this.getData()|| [];
		if (this.listList.length) {
			this.addList("test list 1");
		}
		data.forEach( (listData) => {
			this.listList = [...this.listList, new TaskList(listData.data)];
		});
		this.renderAllLists();
		//Hydrate - if you have an empty template, youre giving it the data and it fills it out (e.g. with water)
	}


// (3) Primary LIST functions (add, find/modify)
	generateListId() {
		let foundId = this.findList(this.lastListId);
		if (foundId) {
			
			this.lastListId++;
			this.generateListId();
		}
		return this.lastLastId;
	}

	addList(content){
		console.log("adding: ", content);
		this.listList.push( new TaskList ( {
			id: this.generateListId(),
			content: content,
		} ) );
		this.setData();
		this.renderAllLists();
	}

	findList(id) {
		return this.listList.find( (list) => {
			return id == list.id;
		})
	}




// (4) Render
	renderAllLists() {
			console.log("rendering all lists...")
			let template = "";

			this.listList.forEach( function( list ) {
				template += list.renderTaskList();
			} );

			// this._$taskApp.innerHTML = template;
			
			// this.lists.forEach( function( list ) {
			// 	list.initData();
			// } );
	}


// (5) Event handler
	listEventHandler(){
		console.log("list event handler running..")
		this.$form.addEventListener('submit', (event) => {
			event.preventDefault();

			let $input = this.$form.querySelector('input');

			if ($input.value){
				this.addList({name: $input.value});
			}
		})


	}
}

