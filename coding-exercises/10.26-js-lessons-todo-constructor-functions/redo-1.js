console.clear()

//Global
//(argument is note, default it to blank)
// Log a separator and note on one line, items (with static label) on the next line
// REMEMBER to add context (this) as the first argument
function print(context, note="") {
	console.log(`--- ${note} ---`)
	console.log(`todos: `, context.todos)
}

//App
const todoApp = {
	//Variables scoped to app
	todos: [],
	todoIdMaker: 0,

	add: function(content) {
		const todo = {
			id: `a-${this.todoIdMaker++}`,
			content: content,
		}

		this.todos = [...this.todos, todo]; //spreads existing todo list under "this" parent and adds new todo (from function above)

		print(this, `Added: ${todo.content}`)
	},

	remove: function(id) {
		print(this, `Removed: ${this.todos[id].content}`)
		delete this.todos[id];
	},

	complete: function(id) {
		this.todos[id].complete = true;
		print(this, `Completed ${this.todos[id].content}`)
	},

	update: function(id, newContent) {
		this.todos[id].content = newContent;
		print(this, `Updated ${this.todos[id].content}`)
	}

}

todoApp.add("Brush your teeth!");
todoApp.add("Go for a run");
todoApp.add("Play tennis");
todoApp.complete(0);
todoApp.remove(1);
todoApp.update(2, "Play pickleball");