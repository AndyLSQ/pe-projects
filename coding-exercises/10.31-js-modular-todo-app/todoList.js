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

		addEventListeners();

	}

	//functions- add, remove, complete??, renderList, event listeners
	add(content) {
	// 	let todo = {
	// 		id: `a-${this.lastId++}`,
	// 		content,
	// 		complete: false,
	// 	};

		this.todos = [...this.todos, new todoClass(`a-${this.lastId++}`, content)];
		this.renderList(this.todos); 
		console.log("TODO LIST AFTER ADD: ", this.todos);
	}


	remove(id) {
		let filtered = this.todos.filter( function(todo) {
			return todo.id != id;
		});

		this.todos = [...filtered];
		this.renderList(this.todos);
		console.log("TODO LIST AFTER REMOVE: ", this.todos);
	}


	renderList(todos) {
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