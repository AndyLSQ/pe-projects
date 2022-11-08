import { todoClass } from './todo.js';
import { addEventListeners } from './eventListeners.js';

class todoListClass {
	//constructor
	constructor(name) {
		this.name = name;
		this.todos = [];
		this.lastId = 0;

		this.$form = document.querySelector('form');
		this.$input = this.$form.querySelector('input');
		this.$output = document.querySelector('output');

		this.data = localStorage;

		this.initialize();
		addEventListeners();

	}


	// data functions
	setData() {
		this.data.setItem( 'listData', JSON.stringify(this.todos) );
	}

	getData() {
		var storedListData = this.data.getItem('listData');
		console.log("get & parse data ", JSON.parse(storedListData));
	}

	initialize() {
		//get stored todo array from local storage

		if	(this.data.getItem('listData')) {
			// get data from local storage
			var list = this.data.getItem('listData');
			list = JSON.parse(list);

			// turn it into todo items
			list.forEach((item) => { //this is a function (must be using shorthand to use the arrow to set .this context)
				this.todos = [...this.todos, new todoClass(item.data)]
			})

			//set it to todos array



		} else {
			this.todos = [];
			this.add ("Sample todo. Create one of your own"); // 0
		}

		//render existing todos
		console.log("TODO LIST AFTER initialize: ", this.todos);
		this.renderList();
	}

	//functions- add, remove, complete??, renderList, event listeners

	add(content) {
	// 	let todo = {
	// 		id: `a-${this.lastId++}`,
	// 		content,
	// 		complete: false,
	// 	};

		this.todos = [...this.todos, new todoClass({content: content}, `a-${this.lastId++}`)];
		this.setData();
		this.renderList(); 
		console.log("TODO LIST AFTER ADD: ", this.todos);
		
	}


	remove(id) {
		let filtered = this.todos.filter( function(todo) {
			return todo.data.id != id;
		});

		this.todos = [...filtered];
		this.setData();
		this.renderList();
		console.log("TODO LIST AFTER REMOVE: ", this.todos);
	}


	renderList() {
		var template = "<ul>";
		this.todos.forEach( function(todo) {
			template += todo.renderTodo();
		});
		template += '</ul>'
		this.$output.innerHTML = template;
	}

}

export {
	todoListClass,
}