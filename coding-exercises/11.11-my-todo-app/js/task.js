
export default class Task {
	
	// (1) Constructor
	constructor(record) {
		this.data = {
			id: record.id,
			content: record.content,
			complete: record.complete,
			dateCreated: record.dateCreated || new Date,
		};
	}

	// (2) Main functions 
	toggleComplete() {
		// asdfaff
		//
	}

	// (3) Render
	render() {
		return `
			<task-card class=${this.data.complete ? "complete" : ""}>
				<li>
					${this.data.content}, ${this.data.complete}
					<actions>
						<button class="remove">remove</button>
						<button class="complete">complete</button>
					</actions>
				</li>
			</task-card>
		`
		//
	}
}