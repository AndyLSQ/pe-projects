var todos = [];
var lastId = 0;
const $form = document.querySelector('form');
const $input = $form.querySelector('input');
const $output = document.querySelector('output');


function add(content) {
	const todo = {
		id: `a-${lastId++}`,
		content,
		complete: false,
	};

	todos = [...todos, todo];
	renderTodos(todos);
}


function remove(id) {
	const filtered = todos.filter( function(todo) {
		return todo.id != id;
	});

	todos = [...filtered];
	renderTodos(todos);
}

function complete(id) {
	for (let i = 0; i < todos.length; i++) {
		if ( todos[i].id == id ) {
			todos[i].complete = !todos[i].complete;
		}
	}
	renderTodos(todos);
}

function renderTodo(todo) {
	return `
		<li data-thisid='${todo.id}'>
			<todo-card class='${todo.complete ? "complete" : ""}'>
				<h2>${todo.content}</h2>

				<actions>
					<button>Remove</button>
					<button>Complete</button>
				</actions>
			</todo-card>
		</li>
	`;
}

function renderTodos(todos) {
	var template = "<ul>"
	todos.forEach( function(todo) {
		template += renderTodo(todo);
	});
	template += '</ul>';
	$output.innerHTML = template;
}

add("Test item 1");
add("Test item 2");
add("Test item 3");


$form.addEventListener('submit', function(event) {
	event.preventDefault();

	add( $input.value );
	$input.value = "";
	console.log('todos: ', todos);
});

$output.addEventListener( 'click', function(event) {
	console.log(event.target);

	if (event.target.textContent == 'Remove') {
		const id = event.target.closest('li').dataset.thisid; //use .closest() to find nearest element in the dom tree and dataset.id to access data properties (data-id is just made up, it could be data-anything)
		remove(id);
	}

	if (event.target.textContent == 'Complete') {
		const id = event.target.closest('li').dataset.thisid;
		complete(id);
	}
})