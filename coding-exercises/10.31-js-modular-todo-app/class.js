class TodoClass {

	constructor() {
		this.todos = [];
		this.count = 0;
	}

	add(content) {
		const todo = {
			id: this.count++,
			content: content,
		};
		this.todos = [...this.todos, todo]
	}

	listTodos(todos) {
		this.todos.forEach( function(todo) {
			console.log(todo);
		});
	}
}

var todoClass = new TodoClass();

todoClass.add("Go for a run");
todoClass.add("Play tennis");
todoClass.listTodos();