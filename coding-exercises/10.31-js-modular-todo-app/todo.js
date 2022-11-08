// -----------todo class-----------
class todoClass {
	//constructor
	// constructor(id, content) {
	// 	this.id = id;
	// 	this.content = content;
	// 	this.dateCreated = new Date();
	// 	this.complete = false;
	// };

	constructor(record, id) {
		this.data = {
			id: record.id || new Date(),
			content: record.content,
			dateCreated: record.dateCreated || new Date(),
			complete: false,
		}
	}

	//functions- complete, modify(later), render

	toggleComplete() {
		this.data.complete = !this.data.complete
	}

	renderTodo() { 
		const {id, complete, content} = this.data
		console.log("!!!", this.data)
		return `
		<li data-id='${id}'>
			<todo-card class='${complete ? "complete" : ""}'>
				<h2>${content}</h2>

				<actions>
					<button>Remove</button>
					<button>Complete</button>
				</actions>
			</todo-card>
		</li>
		`;
	}
}

export {
	todoClass
}