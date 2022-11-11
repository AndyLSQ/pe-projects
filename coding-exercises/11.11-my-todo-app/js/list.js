// Done: Organize, Add unique task id, Add other buttons to event handler (archive/complete), 

// TODO: Expand constructor, add task sorter, add modify functionality

import Task from './task.js';

export default class TaskList {

// (1) Constructor
	constructor(name) {
		this.name = name;
		this.taskList = [];
		this.lastTaskId = 0;
	
		this.$form = document.querySelector('form');
		this.$outlet= document.querySelector('outlet');

		this.initializeTaskList();
		this.eventHandler();
	}

// (2) Local data API & Initialize
	setData() {
		localStorage.setItem("databaseKey", JSON.stringify(this.taskList, null, 2) );
	}
	getData() {
		return JSON.parse(localStorage.getItem('databaseKey'));
	}
	initializeTaskList() {
		let data = this.getData()|| [];
		data.forEach( (taskData) => {
			this.taskList = [...this.taskList, new Task(taskData.data)];
		});
		this.renderTaskList();
	}

// (3) Primary functions (add, find/modify)
	generateId() {
		this.lastTaskId++;
		return this.lastTaskId;
	}

	addTask(content){
		this.taskList.push( new Task ( {
			id: this.generateId(),
			content: content,
			complete: false
		} ) );
		this.setData();
		this.renderTaskList();
	}

	findTask(id) {
		return this.taskList.find( (task) => {
			return id == task.data.id;
		})
	}

	archiveTask(id) {
		let filtered = this.taskList.filter( function(task) {
			return task.data.id != id;
		})

		this.taskList = filtered;
		this.setData();
		this.renderTaskList();
	}

	toggleTaskComplete(id) {
		this.findTask(id).toggleComplete();
		this.setData();
		this.renderTaskList();
	}



// (4) Render
	renderTaskList(){
		var listTemplate = `
			<form>
				<field>
					<label for="">Add a task</label>
					<input type="text" placeholder='New task' autofocus="autofocus">
				<field>
				<button class="add-task">Add task</button>
			</form>

			<ul>
		`
		this.taskList.forEach( function(task) {
			listTemplate += task.renderTask();
		});
		listTemplate += '</ul>';

		this.$outlet = document.querySelector(`outlet`)
		this.$outlet.innerHTML = listTemplate;
	}


// (5) Event handler
	eventHandler() {
		this.$outlet.addEventListener('click', (event) => {
			event.preventDefault();

			if ( event.target.matches('button.add-task') ) {
				var $input = this.$outlet.querySelector('input');
				var content = $input.value;
				this.addTask(content);
				$input.value="";
			}

			if ( event.target.matches('button.archive-task') ) {
				let id = event.target.closest('task-card').dataset.id;
				this.archiveTask(id);
			}

			if ( event.target.matches('button.complete-task') ) {
				let id = event.target.closest('task-card').dataset.id;
				this.toggleTaskComplete(id);
			}


		});
	}
}