console.log("app.js connected")

import TaskList from './list.js';



// var newTaskList2 = new TaskList("TEST LIST 2");


export default class App {

// (1) Constructor
	constructor(listName) {
		this.lastListId = 0;
		this.listList = [];
		this.listName = listName;

		this.initializeListList();
		this.addList("test list")
		this.renderAllLists();
		// this.listEventHandler();
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
		data.forEach( (listData) => {
			this.listList = [...this.listList, new TaskList(listData.data)];
		});
		this.renderAllLists();
	}


// (3) Primary functions (add, find/modify)
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



}

