// TODO: Organize, Expand constructor

import Task from './task.js';

export default class TaskList {

// (1) Constructor
	constructor(name) {
		this.name = name;
		this.tasks = [];
	
		this.$form = document.querySelector('form');
		this.$outlet= document.querySelector('ul');

		console.log("TaskList class connected")
		this.setupApp();
		this.addEventListeners();
	}


	setupApp() {
		let data = JSON.parse( localStorage.getItem("databaseKey") ) || [];

		data.forEach( (taskData) => {
			this.tasks = [...this.tasks, new Task(taskData.data)];
		});
		this.renderTasks();
	}

	addTask(content){
		this.tasks.push( new Task ( {
			id: 'dummy01',
			content: content,
			complete: false
		} ) );
		this.save();
		this.renderTasks();
	}

	save() {
		localStorage.setItem("databaseKey", JSON.stringify(this.tasks, null, 2) );
	}

	renderTasks(){
		//map creates array of the function results
		this.$outlet.innerHTML = this.tasks.map( (task) => {
			return task.render();
		}).join("");
		// this.report();
	}

	addEventListeners() {
		this.$form.addEventListener('click', (event) => {
			event.preventDefault();

			if ( event.target.matches('button') ) {
				var $input = this.$form.querySelector('input');
				var content = $input.value;
				this.addTask(content);
				$input.value="";
			}
		});
	}
}