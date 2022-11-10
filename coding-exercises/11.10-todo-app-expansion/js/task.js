export default class Task {

	//(1) Constructor
	constructor(record) {
		this.id = record.id;
		this.content = record.content;
		this.complete = record.complete;
		this.dateCreated = record.dateCreated;
	}

	//(2) Functions

	//(2a) toggleComplete
	toggleComplete() {
		this.complete = !this.complete;
	}

	//(2b) render individual task
	render() {
		return `
			<li data-id="this.id">
				<task-card class=${this.complete ? "complete" : ""}>
					<actions>
						<button class="remove">Remove Task</button>
						<button class="complete">Complete Task</button>
					</actions>
					<h3>${this.content}</h3>
				</task-card>
			</li>
		`
	}
}