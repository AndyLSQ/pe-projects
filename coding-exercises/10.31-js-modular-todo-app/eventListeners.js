// import { todoClass } from './todo.js';
// import { todoListClass } from './todoList.js';
import { todoList } from './app.js';

function addEventListeners(){

		var $form = document.querySelector('form');
		var $input = $form.querySelector('input');
		var $output = document.querySelector('output');


		//set up with multiple listeners in 1 function
		$form.addEventListener('submit', (event) => { // => changes scope of "this" to the next level up (have to delete the word function)
			event.preventDefault();

			todoList.add( $input.value ); //<---- ERROR IS HERE (used to be this.add)
			$input.value = "";
			//console.log('todos: ', this.todos);
		});

		$output.addEventListener( 'click', (event) => {
			console.log(event.target);

			if (event.target.textContent == 'Remove') {
				const id = event.target.closest('li').dataset.id; //use .closest() to find nearest element in the dom tree and dataset.id to access data properties (data-id is just made up, it could be data-anything)
				todoList.remove(id);
			}

			if (event.target.textContent == 'Complete') {
				const id = event.target.closest('li').dataset.id;
				var foundTodo = todoList.todos.find( function(todo) {
					return todo.data.id == id;
				})
				foundTodo.toggleComplete();
				todoList.renderList(todoList.todos);
			}
		});
	}

	export {
		addEventListeners,
	}