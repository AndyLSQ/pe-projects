class Todo {
	constructor(id, content) {
		this.id = id;
		this.content = content;
		this.dateCreated = new Date();
		this.complete = false;
	}

	toggleComplete() {
		this.complete = !this.complete
	}

	get isComplete() {
		if (this.complete) {
			return "complete"
		} {
			return "";
		}
	}

	render() {
		//const {id, content } = this; <---OBJECT DESTRUCTURING to unpack these things so you dont have to write "this" before them

		return`
		<todo-card class='${this.isComplete}' data-id='${this.id}'>
			<h2>${this.content}</h2>

			<actions>
				<button>Complete</button>
				<button>Remove</button>
			</actions>

		</todo-card>
		`;
	}
}



class TodoApp {

	constructor(name) {
		this.name = name;
		this.todos = [];
		this.count = 0;

		this.$form = document.querySelector('form');
		this.$input = this.$form.querySelector('input');
		this.$outlet = document.querySelector('output');

		this.addEventListeners() //invoke function below
	}

	print(note = "") {
		console.log(`${this.name.toUpperCase()}--------${note}`);
	}

	add(content) {
		todo = new Todo(this.count++, content);
		this.todos = [...this.todos, todo];
		this.print(`Added ${content}`);
	}

	findById(id) {

	}

	remove(index) {
		var removed = this.todos[index].content;
		this.todos.splice(index, 1);
		this.print(`Removed ${removed}`);
	}

	complete(index) {
		this.todos[index].complete = true;
		this.print(`Completed ${this.todos[index].content}`)
	}

	renderList() {
		
	}

addEventListeners() {
	// do that
}

}

// console. log (todos); // NOT global
var todo = new TodoApp("Tonight");
todo.add ("Go to store"); // 0
todo.add("Cook the food"); // 1
todo.add("Eat the food"); // 2
todo.add("Clean the dishes"); // 3 
todo.remove (0);
todo.remove (0); // show 3 
todo.remove (1);

todo.complete (0);

todo.add ("Go back to the store and get some wine..."); //? 
todo. add("Drink some wine"); // ?

var otherTodo = new TodoApp("Fun list");
otherTodo.add("Go to the beach");
otherTodo.add("");
otherTodo.add("Run around naked");