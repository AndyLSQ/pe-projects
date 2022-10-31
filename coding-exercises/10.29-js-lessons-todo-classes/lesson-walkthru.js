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
var todoApp = new todoApp("Tonight");
todoApp.add ("Go to store"); // 0
todoApp.add("Cook the food"); // 1
todoApp.add("Eat the food"); // 2
todoApp.add("Clean the dishes"); // 3 
todoApp.remove (0);
todoApp.remove (0); // show 3 
todoApp.remove (1);

todoApp.complete (0);

todoApp.add ("Go back to the store and get some wine..."); //? 
todoApp. add("Drink some wine"); // ?

var otherTodo = new TodoApp("Fun list");
otherTodo.add("Go to the beach");
otherTodo.add("");
otherTodo.add("Run around naked");