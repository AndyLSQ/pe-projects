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
		//destructure array below
		//function would return a 2 item array, that would go to item & currentColumn
		const [item, currentColumn] = (() => {
			for(const column of data) {
				const item = column.items.find(itemX => item.id ==itemId);

				if (item) {
					return[item, column];
				}
			}
		})();

		console.log(item, currentColumn);

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