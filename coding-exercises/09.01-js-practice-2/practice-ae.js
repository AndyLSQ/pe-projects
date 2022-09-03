var days = 4;

var packingList = [
	{
		itemName: "t-shirts",
		quantity: days,
		type: "clothing",
	},
	{
		itemName: "dress shirts",
		quantity: 1,
		type: "clothing",
	},
	{
		itemName: "gym shorts",
		quantity: 2,
		type: "clothing",
	},
	{
		itemName: "dress shorts",
		quantity: 1,
		type: "clothing",
	},
	{
		itemName: "underwear",
		quantity: days+1,
		type: "clothing",
	},
	{
		itemName: "sock pairs",
		quantity: days,
		type: "clothing",
	},
	{
		itemName: "swimsuit",
		quantity: 1,
		type: "clothing",
	},
	{
		itemName: "toothbrush",
		quantity: 1,
		type: "toiletries",
	},
	{
		itemName: "toothpaste",
		quantity: 1,
		type: "toiletries",
	},
	{
		itemName: "tooth floss",
		quantity: 1,
		type: "toiletries",
	},
	{
		itemName: "contact lens pair",
		quantity: 1,
		type: "toiletries",
	},
	{
		itemName: "contact lens solution",
		quantity: 1,
		type: "toiletries",
	},
	{
		itemName: "deodorant",
		quantity: 1,
		type: "toiletries",
	},
	{
		itemName: "pill box",
		quantity: 1,
		type: "toiletries",
	},
	{
		itemName: "laptop",
		quantity: 1,
		type: "work",
	},
	{
		itemName: "laptop stand",
		quantity: 1,
		type: "work",
	},
	{
		itemName: "ipad",
		quantity: 1,
		type: "work",
	},
	{
		itemName: "keyboard",
		quantity: 1,
		type: "work",
	},
	{
		itemName: "trackpad",
		quantity: 1,
		type: "work",
	},
	{
		itemName: "sneakers",
		quantity: 1,
		type: "shoes",
	},
	{
		itemName: "cycling shoes",
		quantity: 1,
		type: "shoes",
	},
	{
		itemName: "flip flops",
		quantity: 1,
		type: "shoes",
	},
	{
		itemName: "hat",
		quantity: 1,
		type: "clothing",
	},
];

function buildListSection(items, heading) {
	var h2 = document.createElement('h2');
	h2.textContent = heading;
	document.body.appendChild(h2);

	var ul = document.createElement('ul');

	items.forEach(function(item, index, wholeArray)
		{
		var li = document.createElement('li');
		li.textContent = item.itemName + ": " + item.quantity;
		ul.appendChild(li);
		}
	);

	document.body.appendChild(ul);
}

buildListSection(packingList, "Packing List");


//Array.from()- Returns an array from any iterable object (objet has a length property)
console.log("Array.from");
console.log(Array.from("string"));
console.log(Array.from([1,2,3], x => x*3));

//Array.isArray()- Tests if item is an array, returns boolean
console.log("Array.isArray");
console.log(Array.isArray("string"));
console.log(Array.isArray([1,2,3]));

//arrayName.length- use the actual array name .length
console.log("arrayName.length");
console.log(packingList.length);


//arrayName.push- add new item to end of array
console.log("arrayName.push()");
var produce = ["apple", "banana", "carrot"];
produce.push("durian", "eggplant");
console.log(produce);

//arrayName.shift- remove first element of the array. Returns shifted element
console.log("arrayName.shift()");
console.log("Removed: ", produce.shift());
console.log(produce);

// arrayName.join()- returns an array as a string. Seperator can be specified
console.log("arrayName.join()");
pString = produce.join(" and ");
console.log(pString);

// array.reverse()- reverses the order of the array
console.log("arrayName.reverse()");
console.log(produce.reverse());

// array.find()- find the FIRST element that meets specified conditions
console.log("arrayName.find()");
var numbers = [1,2,3,4,5];

function numberCheck(number){
	return number >= 3;
}
console.log(numbers.find(numberCheck));

// array.filter()- find ALL elements that meet specified conditions
console.log("arrayName.filter()");
console.log(numbers.filter(numberCheck))

// array.forEach()
console.log("arrayName.forEach()");
produce.forEach(function(item){
	console.log(item);
});

// array.map()- creates a new array from calling a function on every array element
console.log("arrayName.map()");

function double(number){
	return number * 2;
}

var newArray = numbers.map(double);
console.log(newArray);

// array.reduce()- reduces an array to a single number by performing a function that computes all values into a single value (e.g. sum)
console.log("arrayName.reduce()");

function reducingFunction(total, number) {
	return total + number;
}

console.log(numbers.reduce(reducingFunction));













