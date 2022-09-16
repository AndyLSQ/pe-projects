
// CREATE DOM STUFF

// use const instead of variable if the values will be kept constant
const outlet = document.querySelector('main');
const inboxButton = document.querySelector('#inbox');
const todayButton = document.querySelector('#today');
const laterButton = document.querySelector('#later');
const addButton = document.querySelector('.add'); //were making add button a class, not an ID


outlet.innerHTML = "<h1>Andy</h1>";

inboxButton.addEventListener('click', function() {
	alert('go to inbox');
});

todayButton.addEventListener('click', function() {
	alert('go to today');
});

laterButton.addEventListener('click', function() {
	alert('go to later');
});

addButton.addEventListener('click', function() {
	alert('go to add');
});