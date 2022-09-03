// var simpleDeskItems = [
// 	"Guava drink",
// 	"Exercises book",
// 	"Beer bottle",
// 	"Stupid peanut butter jar",
// 	"Timer",
// 	"Ramen trash",
// 	"Cool pen for Danielle",
// 	"Old Coffee"
// 	];

// var itemExample = [
// 	{
// 		name: "Guava drink",
// 		type: "trash"
// 	}
// ];

var deskItems = [
	{
		name: "Guava drink",
		type: "trash",
	},
	{
		name: "Exercises book",
		type: "book",
	},
	{
		name: "Beer bottle",
		type: "trash",
	},
	{
		name: "Stupid peanut butter jar",
		type: "trash",
	},
	{
		name: "60min Time-timer",
		type: "timer",
	},
	{
		name: "Ramen container",
		type: "trash",
	},
	{
		name: "Cool pen for Danielle",
		type: "pen",
	},
	{
		name: "30min Time-timer",
		type: "timer",
	},
	{
		name: "Water beaker",
		type: "container",
	},
	{
		name: "Old coffee",
		type: "trash",
	},
	{
		name: "Water bottle",
		type: "trash",
	},
];



// deskItems.forEach( function(item) {
	 
// 	//if the item is trash
// 	if (item.type != "trash") {

// 		//put it on the list	
// 		console.log(item.name)
// 		// trashList.append(item);
// 	}
// });

// console.log("CONTAINERS:") 
// deskItems.forEach( function(item) {
	
// 	//if the item is a container
// 	if (item.type == "container") {

// 		//put it on the list	
// 		console.log(item.name)
// 		// trashList.append(item);
// 	}
// });

// console.log("NOT CONTAINERS:") 
// deskItems.forEach( function(item) {
// 	//if the item is NOT a container
// 	if (item.type != "container") {

// 		//put it on the list	
// 		console.log(item.name)
// 		// trashList.append(item);
// 	}
// });


var trash = deskItems.filter( function(item) {
	return item.type == 'trash';
});

var containers = deskItems.filter( function(item) {
	return item.type == 'container';
});

var books = deskItems.filter( function(item) {
	return item.type == 'book';
});


//create function that accepts an array and generates markup
//must have heading and create a list of the items

function buildListSection(items, heading) {
	var h2 = document.createElement('h2');
	h2.textContent = heading;
	document.body.appendChild(h2);

	var ol = document.createElement('ol');

	items.forEach(function(item, index, wholeArray) {
		var li = document.createElement('li');
		li.textContent = item.name;
		ol.appendChild(li);
	});

	document.body.appendChild(ol);
}

buildListSection(trash, "Things derek needs to take to the trash");

buildListSection(books, "Derek's books");

buildListSection(containers, "Derek's containers");









