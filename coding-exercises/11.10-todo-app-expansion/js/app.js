//REVIEW ALL OF THIS ///

import List from "./list.js";

export default class App {
	// (1) Constructor
	constructor() {
		this.lastId = 0;
		this.lists = this.getData();
		this._$taskApp = document.querySelector( "task-app" );
		this.renderAllLists();
		this.buttonHandler();
	}

	// (2) Functions

	//(2a) F: Rehydrate
	rehydrateLists( data ) {
		return data.map( function( listData ) {
			return new List( listData );
		} );
	}

	//(2b) F: Add (with uniqueId)
	getUniqueID() {
		let found = this.findListById( this.lastId );
		if ( found ) {
			this.lastId++;
			console.log( this.lastId );
			this.getUniqueID();
		}
		return this.lastId;
	}

	add( name ) {
		let listTemplate = {
			id: this.getUniqueID(),
			name,
			list: [],
			trash: [],
			dateCreated: new Date(),
		};
		let list = new List( listTemplate );
		this.lists.push( list );
		this.renderAllLists();
		this.setData();
	}

	//(2c) F: Find & modify
	findListById( id ) {
		return this.lists.find( ( list ) => {
			return id == list.id;
		} );
	}

	remove( id ) {
		console.log("REMOVE LIST BUTTON HIT")
		let filtered = this.lists.filter( function( list ) {
			return list.id != id;
		} );
		let list = this.findListById( id );
		list.id = new Date();

		this.lists = filtered;
		console.log( "moved to trash ", this.trash );
		this.renderAllLists();
		this.setData();
	}

	//(2d) F: Render (no sort)
	renderAllLists() {
		console.log("rendering all lists...")
		let template = "";

		this.lists.forEach( function( list ) {
			template += list.renderList();
		} );

		this._$taskApp.innerHTML = template;
		
		this.lists.forEach( function( list ) {
			list.initData();
		} );

	}

	



	



	buttonHandler() {
		window.addEventListener( "click", () => {
			event.preventDefault();
			if ( event.target.matches( "button.add-list" ) ) {
				let $input = event.target.closest( "input-field" )
					.querySelector( "input" );
				!$input.value
					? alert( "please enter something" )
					: this.add( $input.value );
				$input.value = "";
			}
			if ( event.target.matches( "button.remove-list" ) ) {
				let id = event.target.closest( "task-list" )
					.dataset.listId;
				console.log(event.target)
				this.remove( id );
			}
			if (
				event.target.matches( "button.add" )
				|| event.target.matches( "button.remove *" )
				|| event.target.matches( "button.complete" )
			) {
				this.setData();
			}
		} );
		window.addEventListener("keydown", (event) => {
			if ( event.code === "Enter" ) {
				this.setData();

			}
		})
	}

	setData() {
		localStorage.taskAppData = JSON.stringify( this.lists );
		// localStorage.taskAppTrash = JSON.stringify( this.trash );
		console.log( "saved to storage" );
	}

	getData() {
		let data = localStorage.taskAppData
			? this.rehydrateLists( JSON.parse( localStorage.taskAppData ) )
			: [];
		return data;
	}


}