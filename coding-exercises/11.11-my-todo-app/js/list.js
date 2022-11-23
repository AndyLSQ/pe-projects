// Done: Organize, Add unique task id, Add other buttons to event handler (archive/complete), Make id unique, 

// TODO: Expand constructor, add task sorter, add modify functionality

import Task from './task.js';

export default class TaskList {

// (1) Constructor
	constructor(record) {
		this.data = {
			name: record.name || "No name shouldnt happen",
			id: record.id || Math.random()*100001|0,
			tasks: record.tasks || [], //<--CHANGED FROM taskList**
		};
	
		this.$form = document.querySelector('form');
		this.$outlet= document.querySelector('outlet');

		this.initializeTaskList();
		this.taskEventHandler();
	}

// (2) Local data API & Initialize
	setData() {
		localStorage.setItem("taskListData", JSON.stringify(this.data.taskList, null, 2) );
	}
	getData() {
		return JSON.parse(localStorage.getItem('taskListData'));
	}
	initializeTaskList() {
		let data = this.getData()|| [];
		data.forEach( (taskData) => {
			this.data.taskList = [...this.data.taskList, new Task(taskData.data)];
		});
		this.renderTaskList();
	}

// (3) Primary TASK functions (add, find/modify)
	generateTaskId() {
		let foundId = this.findTask(this.data.taskId);
		if (foundId) {
			this.data.taskId++;
			this.generateTaskId();
		}
		return this.data.taskId;
	}

	addTask(content){
		this.data.taskList.push( new Task ( {
			id: this.generateTaskId(),
			content: content,
			complete: false
		} ) );
		this.setData();
		this.renderTaskList();
	}

	findTask(id) {
		return this.data.taskList.find( (task) => {
			return id == task.data.id;
		})
	}

	archiveTask(id) {
		let filtered = this.data.taskList.filter( function(task) {
			return task.data.id != id;
		})

		this.data.taskList = filtered;
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
			<div class="list" >
			<h2>${this.data.listName}</h2>
			<actions>
						<button class="archive-list">Archive List</button>
			</actions>
			<form>
				<field>
					<label for="">Add a task</label>
					<input class="task-input" type="text" placeholder='New task' autofocus="autofocus">
				</field>
				<button class="add-task">Add task</button>
			</form>

			<ul class="task-list">
		`
		this.data.tasks.forEach( function(task) {
			// listTemplate += task.renderTask();
		});
		listTemplate += '</ul></div>';

		this.$outlet = document.querySelector(`outlet`)
		this.$outlet.insertAdjacentHTML("beforeend", listTemplate);
	}

// (5) Event handler
	taskEventHandler() {
		this.$outlet.addEventListener('click', (event) => {
			event.preventDefault();

			if ( event.target.matches('button.add-task') ) { 
				let $button = event.target;

				let $input = $button.closest('form').querySelector('input');
				let content = $input.value;

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