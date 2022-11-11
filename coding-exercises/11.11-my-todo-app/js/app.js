console.log("app.js connected")

import TaskList from './list.js';

var newTaskList = new TaskList("TEST LIST 1");

// var newTaskList2 = new TaskList("TEST LIST 2");


export default class App {

// (1) Constructor
	constructor() {
		this.lastListId = 0;
		this.listList = [];

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
		data.forEach( (listData) => {
			this.listList = [...this.listList, new TaskList(taskData.data)];
		});
		this.renderListList();
	}


// (3) Primary functions (add, find/modify)

// (4) Render
	renderAllLists() {
			console.log("rendering all lists...")
			let template = "";

			this.lists.forEach( function( list ) {
				template += list.renderList();
			} );

			// this._$taskApp.innerHTML = template;
			
			// this.lists.forEach( function( list ) {
			// 	list.initData();
			// } );
	}


// (5) Event handler



}

