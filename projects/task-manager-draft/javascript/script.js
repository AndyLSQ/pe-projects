console.clear();

// GET ALL THE DOM STUFF WE NEED

// use const instead of variable if the values will be kept constant
const outlet = document.querySelector('main');
const inboxButton = document.querySelector('#inbox');
const todayButton = document.querySelector('#today');
const laterButton = document.querySelector('#later');
const addButton = document.querySelector('#add'); //were making add button a class, not an ID

var listData = [];

function addItem(text) {
	listData.push(text);
	console.log('listData', listData);
	renderInbox();
}

addItem("Take out trash");
addItem("Walk the dog");
addItem("Design application");
addItem("Bike ride");

console.log(listData);

function renderItems(items) {
	var template = "";
	items.forEach(function(item) {
		template += `<li>${item}</li>`;
		//add this onto the template
	});

	return template; // returns the string for the template with items
}



var siteTitle = "Inbox App";

function renderInbox() {
	
var template = `
	<h1>${siteTitle}</h1>

	<p>Things to be sorted</p>

	<ol>
		${renderItems(listData)}
		<!-- Places the html string here -->
	</ol>
`;
	outlet.innerHTML = template;
}

//This function can run at any time

var todayTemplate = `
	<h1>Today</h1>

	<p>Your current tasks</p>

	<ol>
		<li>Items would go here...</li>
		<li>Items would go here...</li>
		<li>Items would go here...</li>
		<li>Items would go here...</li>
	</ol>
`;

var laterTemplate = `
	<h1>Later</h1>

	<p>Tasks for the future</p>

	<ol>
		<li>Items would go here...</li>
		<li>Items would go here...</li>
		<li>Items would go here...</li>
		<li>Items would go here...</li>
	</ol>
`;

var addTemplate = `
	<h1>Add a new item</h1>

	<form>
		<label>Todo name</label>
		<input />
		<button>Submit</button>
	</form>
`;

//Make inbox the default page if none specified
renderInbox();


// EVENT LISTENERS / Interaction
inboxButton.addEventListener('click', function() {
	renderInbox();
});

todayButton.addEventListener('click', function() {
	outlet.innerHTML = todayTemplate;
});

laterButton.addEventListener('click', function() {
	outlet.innerHTML = laterTemplate;
});

addButton.addEventListener('click', function() {
	outlet.innerHTML = addTemplate;
});


//For adding items

window.addEventListener('click', function(event) {
	if (event.target.matches('form button') ) {
	event.preventDefault();
	// prevent the normal php form submission behavior

	// traverse the dom for element/values
	var textInput = 
	event.target.closest('form').querySelector('input');

		if (textInput.value) {
			addItem(textInput.value);
		}
	}
});
