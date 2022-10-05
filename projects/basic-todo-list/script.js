console.clear();

// Set up without UI first


// Variables

var lastId = 0;

var list = [];

var trash = [];


// Functions

function renderlist() {
	console.log(list);
}

function add(description) {
	var item = {
		id: lastId++,
		description: description,
		complete: false,
	};
	list.push(item);
	renderlist();
}

function removeById(id) {
	var everythingButThisItem = 
	// the filterFunction returns items where id is not the specified id
	// the .filter method creates an array of these items
	list.filter( function filterFunction(item) {
		return item.id !== id;
	});

	list = everythingButThisItem; //replace the main list with this filtered list

	renderlist();
}

function toggleComplete(id) {
	//TODO
}

//Dummy add/remove to test
add("Take out trash");
add("Finish style tile");
add("Go for a walk");
removeById(1);
add("Work on this codepen");
removeById(0);
add("Meet up with Jesse and share your work");


//Prep button setup
window.addEventListener('click',
	function(event) {
		event.preventDefault();

		// based on the button you push
		// do the right function (add/remove)
	});