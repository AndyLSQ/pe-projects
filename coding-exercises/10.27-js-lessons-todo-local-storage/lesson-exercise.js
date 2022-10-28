//LESSON FOLLOW-ALONG

console.clear()

function print(context, note = "") {
	console.log(`---- ${note}`)
	console.log('todos: ', context.todos); //this. refers to the parent object itself
}

const todoApp = {
	todos: [],
	todoIdMaker: 0,


	//(3) Task functions- add, remove, complete, modify
	add: function(content) {
		const todo = {
			id: `a-${this.todoIdMaker++}`,
			content: content,
		};

		this.todos = [...this.todos, todo]; //effectively adding the todo to the end of a new array
		print(this, `Added ${content}`);
	},

	remove: function(id) {
		print(this, `Removed ${this.todos[id].content}`);
		this.todos.splice(id, 1);
	},

	complete: function(id) {
		this.todos[id].complete = true;
		print(this, `Completed ${this.todos[id].content}`);
	},

	update: function(id, newContent) {
		// CHALLENGE: FILL THIS IN;
		this.todos[id].content = newContent;
		print(this, `Updated ${this.todos[id].content}`);
	},

};

const otherTodo = todoApp;


todoApp.add("Brush your teeth!");
todoApp.add("Go for a run");
todoApp.add("Play tennis");
todoApp.complete(0);
todoApp.remove(1);


//practice turning this app into an object
//delete and write it out from scratch
//write your own app (packing list) into an object






//(2) Declare global variables
// const todos = [];
// var todoIdMaker = 0;

//console.log('todos: ', todos);




//(4) Test examples
// add("Go to the store");
// add("Prepare dinner");
// complete(0);
// add("Make this video");
// remove(1);
// add("Go to sleep!");
// update(2, "Make this video better");