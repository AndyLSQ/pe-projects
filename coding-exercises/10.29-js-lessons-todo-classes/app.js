// -----------todo class-----------
class TodoClass {
	//constructor
	constructor(id, content) {
		this.id = id;
		this.content = content;
		this.dateCreated = new Date();
		this.complete = false;
	};

	//functions- complete, modify(later), render



	renderTodo {

	}
}

// -----------todolist class-----------
class TodoListClass {
	//constructor
	constructor(name) {
		this.name = name;
		this.todos = [];
		this.lastId = 0;

		this.$form = document.querySelector('form');
		this.$input = $form.querySelector('input');
		this.output = document.querySelector('output');

		this.addEventListeners();

	}

	//functions- add, remove, complete??, renderList, event listeners
	add(content) {
		let todo = {
			id: `a-${this.lastId++}`,
			content,
			complete: false,
		};

		this.todos = [...this.todos, todo];
		renderList(this.todos);
	}


	remove(id) {
		let filtered = todos.filter( function(todo) {
			return todo.id !=id;
		});

		todos = [...filtered];
		renderList(todos);
	}


	renderList(todos) {
		var template = "<ul>";
		todos.forEach( function(todo) {
			template += renderTodo(todo);
		});
		template += '</ul>'
		$output.innerHTML = template;
	}


	addEventListeners(){
		//set up with multiple listeners in 1 function
	}
}