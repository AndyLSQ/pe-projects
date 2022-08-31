var exampleArray = ["actors","badmouth", "cattail", "dogstooth"];

var peopleArray = ["alex","tommy", "derek", "jevohn"];


// console.log('array item', exampleArray[0])

function shoutName(name) {
	console.log(name + "!!!!!")
}

function printItem(item, index) {
	var listItem = document.createElement('li');
	listItem.textContent = index + " " + item;
	// listItem.classList.add('item')
	document.querySelector('body').appendChild(listItem);
}

function doThings(anArray, aFunction) {
	for (var i = 0; i < anArray.length; i++){
	aFunction(anArray[i], i, anArray);
	}
}

// doThings(exampleArray, shoutName);
// doThings(peopleArray, printItem);

peopleArray.forEach( function(person, index, fullArray) {
	console.log(person, index, fullArray)
});

