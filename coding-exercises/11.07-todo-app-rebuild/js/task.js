// Notes
// - Use "this" prefix for data
// - Export the whole task class for use in list.js 


import { taskListClass } from './list.js';


class taskClass {

	//class constructor
	constructor(record) {
		this.data = {
			id: record.id, //|| new Date() //<<< ERROR HERE!!
			content: record.content,
			dateCreated: record.dateCreated || new Date(),
			complete: false
		}
	}

	//functions- toggle, renderTask
	//[] Add modify

	toggleComplete() {
		
		this.data.complete = !this.data.complete;

		taskListClass.setData()
	}

	renderTask() {
		const {id, complete, content} = this.data;

		return `
		<li data-id='${id}'>
			<task-card class='${complete ? "complete" : ""}'>
				
				<h2>${content}</h2>

				<actions>
					<button>Remove</button>
					<button>Complete</button>
				</actions>

			</task-card>
		</li>
		`;
	}
}

export {
	taskClass
}