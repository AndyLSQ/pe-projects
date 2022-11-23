old app.js

// (0) Imports & set up class

export default class App {

	// (1) Constructor
	constructor(name) {
		this.lists = [];
		this.lastId = 0;

		//this.renderLists();
		//this.eventHandler();
		console.log("app.js start connected")
		this.initialize();
	}


	// (5) Local data setup (lists storage)
	setData() {
		localStorage.setItem('appData', JSON.stringify(this.lists));
	}

	getData() {
		var listListData = JSON.parse(localStorage.getItem('appData'));
	}


	// (6) Initialize
	initialize() {
		if(getData()) {
			var listList = getData();
			console.log('initialized: ', listList);

			//TODO: ADD LOOP HERE TO UPDATE listLIST ARRAY
			listList.forEach( (i) => {
				this.lists = [this.lists, new List(i.data)]
			})
		}
	}

	// (2) Main functions
	//  (2a) Rehydrate?
	//  (2b) Create ID and Add
	//  (2c) Find & modify


	// (3) Render
	// (4) Event handler


}
