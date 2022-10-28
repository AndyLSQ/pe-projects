
const data = localStorage;

list = undefined;

//input task

var $form = document.querySelector('.task-form');

var $input = $form.querySelector('input');

$form.addEventListener('submit', function(event){
	event.preventDefault();
	console.log($input.value);
	$input.value="";
})

//initialize (anything that has to happen at the beginning- setting variables and setting data structures to zero (e.g creating a new todolist and setting up event listeners)

//make todo cards with complete, modify, delete

//save task to data

//get task from data to display

//add buttons to modify data (toggle, delete) & save back to data