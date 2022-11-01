// -----------todo class-----------
class todoClass {
	//constructor
	constructor(id, content) {
		this.id = id;
		this.content = content;
		this.dateCreated = new Date();
		this.complete = false;
	};

	//functions- complete, modify(later), render

	toggleComplete() {
		this.complete = !this.complete
	}

	renderTodo() {
		return `
		<li data-id='${this.id}'>
			<todo-card class='${this.complete ? "complete" : ""}'>
				<h2>${this.content}</h2>

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