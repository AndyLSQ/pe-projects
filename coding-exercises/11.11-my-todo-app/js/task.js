
export default class Task {
	
// (1) Constructor
	constructor(record) {
		this.data = {
			id: record.id || Math.random()*100001|0,
			content: record.content,
			complete: record.complete || false,
			dateCreated: record.dateCreated || new Date(),
		};
	}

// (2) Main functions 
	toggleComplete() {
		this.data.complete = !this.data.complete;

	}

// (3) Render
	renderTask() { 
		//order doesnt matter when deconstructing (looks up by field name). uses shorthand for id:id, etc
		const {id: id, complete, content} = this.data;
		return `
			<task-card data-id='${id}' class=${complete ? "complete" : ""}>
				<li>
					${content}, ${complete}
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