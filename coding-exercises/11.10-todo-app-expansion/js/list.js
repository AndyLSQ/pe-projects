import Task from './task.js';

export default class List {

	// (1) Constructor
	constructor(record) {
		this.name = record.name;
		this.id = record.id;
		this.list = record.list;
		this.dateCreated = record.dateCreated;
		this.lastId = 0;
		this.trash = record.trash;

		this.buttonHandler()
	}

	// (2) Main Functions

	//(2a) F: Rehydrate & Initialize
	initData() {
		this.list = this.rehydrateTasks(this.list);
		this.trash = this.rehydrateTasks(this.trash);
		this.renderTasks()
	}

	// !!! REVISIT THIS !!!
	rehydrateTasks(data) {
		return data.map(function(taskData) {
			return new Task(taskData)
		});
	}

	// (2b) F: Add (with uniqueId)
	getUniqueId() {
		let found = this.findCardById(this.lastId);
		if (found) {
			this.lastId++;
			this.getUniqueId();
		}
		return this.lastId;
	}

	add(content){
		let taskTemplate = {
			id: this.getUniqueId(),
			content,
			complete: false,
			dateCreated: new Date(),
		};
		const task = new Task (taskTemplate);
		this.list.push(task);
		console.log(this.list);
		this.renderTasks;
	}

	// (2c) F: Find & Modify
	findCardById(id) {
		return this.list.find((task) => {
			return id == task.id
		})
	}

	remove(id) {
		let filtered = this.list.filter( function(task) {
			return task.id != id;
		})
		this.list = filtered
		this.renderTasks()
	}

	complete(id) {
		this.findCardById(id).toggleComplete()
		this.renderTasks()
	}

	//(3) F: Sort & Render

	// ??? REVISIT THIS ???
	sorter() {
		this.list.sort(function(a,b) {
			return a.complete - b.complete;
		})
	}

	renderTasks() {
		this.sorter();
		var template = "<ul>";
		this.list.forEach( function(task) {
			template += task.render();
		});
		template += "</ul>";
		this.$outlet = document.querySelector(`[data-list-id="${this.id}"] output-field`);
		this.$outlet.innerHTML = template;
	}

	renderList(){
		return `
			<task-list data-list-id="${this.id}">
				<h2>${this.name}</h2>
				<actions>
					<button class="remove-list">
						Remove List
					</button>
				</actions>
				<form>
					<input-field>
						<label>What do you want to do?</label>
						<input minlength="1" type="text">
						<button class="add">Add</button>
					</input-field>
				</form>
				<output-field>
				</output-field>
			</task-list>
		`;
		return `<todo-list data-list-id="${this.id}">
					<h2 class="attention-voice" >${this.name}</h2>
					<actions>
						<button class="remove-list">
						</button>
					</actions>
					<form>
						<input-field>
							<label class="notice-voice" >What do you want To do?</label>
							<input minlength="1" type="text">
							<button class="add">Add</button>
						</input-field>
					</form>
					<output-field>
					</output-field>
				</todo-list>
		`;
	}

	//(4) Event handler
	buttonHandler() {
		window.addEventListener("click", (event) => {
			event.preventDefault();

			if(event.target.matches(`[data-list-id="${this.id}"] button.add`)) {
				console.log("ADD")
				let $input = event.target.closest("task-list").querySelector("input");
				!$input.value ? alert("Please enter something") : this.add($input.value);
				$input.value = "";
			}

			if(event.target.matches( `[data-list-id="${this.id}"] button.remove`)) {
				console.log("data list id::: ", this.id);
				console.log("REMOVE");
				let id = event.target.closest("li").dataset.id;
				console.log("ID: ", id);
				this.remove(id);
			}
			
			//!!! COME BACK AND REVIEW BELOW !!!
			// if ( event.target.matches( `[data-list-id="${this.id}"] button.complete` ) ) {
			// 	const $li = event.target.closest( "li" );
			// 	let id = $li.dataset.id;
			// 	let $card = $li.querySelector("task-card");
			// 	this.complete( id );
			// 	this.crossOff($card); //why doesnt this wooooork
			// }


			// if (
			// 	event.target.matches( `[data-list-id="${this.id}"] h2.attention-voice` )
			// 	|| event.target.matches( `[data-list-id="${this.id}"] h3.calm-voice` )
			// ) {
			// 	let $text = event.target;
			// 	let content = $text.textContent
			// 	$text.innerHTML = `<input class="edit-text" type='text' value='${content}'>`;
			// 	let $input = $text.querySelector( "input.edit-text" );
			// 	$input.setSelectionRange(content.length - 1, content.length - 1)
			// 	$input.focus();

			// 	$input.addEventListener( "keydown", ( event ) => {
			// 		if ( event.code === "Enter" ) {
			// 			let value = $input.value
			// 			$text.innerText = value;
			// 			this.name = value

			// 		}
			// 		if (event.code == "Escape") {
			// 			$text.innerText = content;
			// 		}
			//	});
			// }
		});

		}
	}