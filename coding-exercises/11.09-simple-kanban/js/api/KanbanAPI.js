export default class KanbanAPI {
	static getItems(columnId) {
		//read returns an array, call find function on this array
		const column = read().find(column => column.id == columnId);

		if(!column) {
			return [];
		}

		return column.items;
	}

	static insertItem(columnId, content) {
		const data = read();
		const column = data.find(column => column.id == columnId);
		const item = {
			id: Math.floor(Math.random() * 1000000),
			content: content,
		};

		if (!column) {
			throw new Error("Column does not exist.")
		}

		column.items.push(item);
		save(data);

		return item;
	}

	//props would include content, column, new position for that item
	static updateItem(itemId, newProps) {
		const data = read();
		
		//(1) Locate item and its current column
		//destructure array below
		//function would return a 2 item array, that would go to item & currentColumn
		const [item, currentColumn] = (() => {
			for(const column of data) {
				const item = column.items.find(itemF => itemF.id ==itemId);

				if (item) {
					return[item, column];
				}
			}
		})();

		//(2) Check if there is an item
		if (!item) {
			throw new Error("Item not found.")
		}


		//(3a) Update the content
		//- If no new content provided (aka newProps.content is undefined), keep the current content, otherwise update item.content to the new content
		item.content = newProps.content === undefined ? item.content : newProps.content;

		//(3b) Update column and position
		//- If columnId and postion are defined
		if (
			newProps.columnId !== undefined
			&& newProps.position !== undefined
		) {
			//get a reference to the destination column
			const targetColumn = data.find(column => column.id == newProps.columnId);

			// console.log(targetColumn); // this just gets the column, nothing has moved yet 

			if (!targetColumn) {
				throw new Error("Target column not found.");
			}

			//(3b-1) Delete item from its current column
			// - indexOf() finds what index the item is currently in
			// - this gets passed into the splicer 
			// - splice arguments are (position, # of items to remove, item to insert)
			// - this removes 1 item at the index of the current item
			currentColumn.items.splice(currentColumn.items.indexOf(item), 1) 


			//(3b-2) Move item into its new column & position
			// splice at new position, 0 = dont delete anything, add item
			targetColumn.items.splice(newProps.position, 0, item);
		}

		save(data);
	}
}

function read() {
	const json = localStorage.getItem("kanban-data");

	//default data
	if(!json) {
		return [
			{
				id: 1,
				items: []
			},
			{
				id: 2,
				items: []
			},
			{
				id: 3,
				items: []
			},
		];
	}

	return JSON.parse(json);
}

function save(data) {

	localStorage.setItem("kanban-data", JSON.stringify(data));
}