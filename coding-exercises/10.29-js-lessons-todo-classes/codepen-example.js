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
// - Constructor w/ list name, todos[], query selectors (ALSO -- run setup function, run event listeners)
// - Function: setupApp()- Get data from storage for each todo, and recreate the live code, includes creating the
// - Functiona: add, save, renderList, add event listeners



//create new TodoList("pass-in-name")