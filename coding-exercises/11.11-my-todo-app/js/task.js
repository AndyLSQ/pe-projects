import TaskList from './list.js';

export default class Task {
	
// (1) Constructor
	constructor(record) {
		this.data = {
			id: record.id,
			content: record.content,
			complete: false,
			dateCreated: record.dateCreated || new Date,
		};
	}

// (2) Main functions 
	toggleComplete() {
		this.data.complete = !this.data.complete;

	}

// (3) Render
	renderTask() {
		return `
			<task-card data-id='${this.data.id}' class=${this.data.complete ? "complete" : ""}>
				<li>
					${this.data.content}, ${this.data.complete}
					<actions>
						<button class="archive-task">Archive</button>
						<button class="complete-task">Complete</button>
					</actions>
				</li>
			</task-card>
		`
		//
	}
}