console.clear();


//TODO Class
// - constructor w/ data object for indiv todo
// - render function to return list item
class Todo {
	constructor (record) {
		this.data = {
			content: record.content,
			dateCreated: record.dateCreated || new Date,
		};
	}

	render() {
		return `<li>${this.data.content}</li>`
	}
}

//TODO LIST Class

class TodoList {
	// - Constructor w/ list name, todos[], query selectors (ALSO -- run setup function, run event listeners)
	constructor(name) {
		this.name = name;
		this.todos = [];

		this.$form = document.querySelector('form');
		this.$outlet = document.querySelector('ul');

		this.setupApp();
		this.addEventListeners();
	}

	// - Function: setupApp()- GET & PARSE FROM LOCAL STORAGE for each todo, and recreate the live code
	setupApp() {
		//get the whole list from local storage (or set data to blank [])
		const data = JSON.parse (localStorage.getItem(this.name)) || [];

		//loop thru todos in the list
		data.forEach( (todoData) => {
			//add each one to the list.
			//create each todo by calling NEW todo class
			// syntax - new TodoCLASS(todoDataSELFARGUMENT.data(const from above, which is pulled from storage))
			console.log("todoData.data ", todoData.data)
			this.todos = [...this.todos, new Todo(todoData.data)];
			console.log(this.todos);
		});
	}

	// - Function: add
	addTodo(content) {
		this.todos.push( new Todo( { content: content }));
		this.save();
		this.renderList();
	} 
	// - Function: save to LOCAL STORAGE
	save() {
		localStorage.setItem( this.name, JSON.stringify(this.todos, null, 2))
	}
	// - Functions: renderList, add event listeners


}
//create new TodoList("pass-in-name")