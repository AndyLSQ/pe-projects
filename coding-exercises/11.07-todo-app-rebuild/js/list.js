// Notes
// - Use "this" prefix for all constructor properties here
// - Use => shorthand for functions to set context one level up, so "this" can be used as if it was in the class, not the subfunction within the class

console.log("test list.js")
import { taskClass } from './task.js';
// import { testTaskList } from './app.js'


class taskListClass {

	constructor(name) {
		this.name = name;
		this.tasks = [];
		this.lastId = 0;

		this.$form = document.querySelector('form');
		this.$input = this.$form.querySelector('input');
		this.$output = document.querySelector('output');

		this.data = localStorage; //dont have to do this

		this.initialize();
		this.addEventListeners();
	}


	//1. Data functions
	setData() {
		this.data.setItem('listData', JSON.stringify(this.tasks))
	}

	getData() {
		var storedListData = this.data.getItem('listData');
	}


	//2. Initialize
	initialize() {
		//Get task array from local storage

		//TODO: change _get and _set to use data functions above
		if (this.data.getItem('listData')) {
			var list = this.data.getItem('listData');
			list = JSON.parse(list);
			console.log('initialized: ', list)

			list.forEach((item) => { //MUST use => to set context for "this." one level up from the individual item.
				this.tasks = [...this.tasks, new taskClass(item.data)]
			})

		} else {
			this.tasks = [];
			this.add("Sample task. Try creating one of your own.")
			console.log('not initialized: ', this.tasks)
		}

		this.renderList();
	}


	//3. App functions- add, remove
	
	add(content) {
		console.log("input value: ", this.$input.value);
		this.tasks = [...this.tasks, new taskClass({content: content, id: `a-${this.lastId++}-${new Date()}`})];
		this.setData();
		console.log("list after adding task: ", this.tasks);
		this.renderList();
	}


	remove(id) {
		let filtered = this.tasks.filter(function(task){
			return task.data.id != id;
		});

		console.log("FILTERED: ",filtered);

		this.tasks = [...filtered];
		this.setData();
		this.renderList();
	}

	//4. Render list
	renderList() {
		var template = '<ul>'

		this.tasks.forEach( function(task) {
			template += task.renderTask();
		});

		template += `</ul>`

		this.$output.innerHTML = template;
	}

	//5. Event Listeners
	addEventListeners() {

		this.$form = document.querySelector('form');
		this.$input = this.$form.querySelector('input');
		this.$output = document.querySelector('output');


		this.$form.addEventListener('submit', (event) => //
		{
			event.preventDefault();
			this.add( this.$input.value ); //run add() function
			this.$input.value = ""; //reset to blank after submit
			console.log('submit event')
		})

		this.$output.addEventListener('click', (event) => {
			if (event.target.textContent == 'Remove') {
				const id = event.target.closest('li').dataset.id; //use .closest() to find nearest element in the dom tree and dataset.id to access data properties (data-id is just made up, it could be data-anything)
				this.remove(id);
			}

			//needs to run function in task.js
			if (event.target.textContent == 'Complete') {
				const id = event.target.closest('li').dataset.id;
				var foundTask = this.tasks.find( function(task) {
					// console.log("task.data.id: ", task.data.id);
					console.log("id: ", id);

					return task.data.id = id;
				})

				console.log("FOUND TASK::: ", foundTask);

				foundTask.toggleComplete();
				
				console.log("back on list.js: ",this.tasks)
				this.setData();
				this.renderList();
			}

		});

	}


}

export {
	taskListClass
}