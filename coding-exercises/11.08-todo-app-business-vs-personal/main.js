window.addEventListener('load', () => {
	todos = JSON.parse(localStorage.getItem('todos')) || []; 
	//(1) no const/let/var makes it a global variable 
	//(2) if there are todos in our local storage than get them, else todos is an empty array
	const nameInput = document.querySelector('#name');
	const newTodoForm = document.querySelector('#new-todo-form');

	const username = localStorage.getItem('username') || '';

	nameInput.value = username;

	nameInput.addEventListener('change', event => {
		localStorage.setItem('username', event.target.value);
	})

	newTodoForm.addEventListener('submit', event => {
		event.preventDefault();

		//todo IS DEFINED HERE
		const todo = {
			content: event.target.elements.content.value, //links to content input name (which is "content") in index.html (line 30)
			category: event.target.elements.category.value,
			done: false,
			createdAt: new Date().getTime()
		}

		if (todo.content) {

			todos.push(todo);

			localStorage.setItem('todos', JSON.stringify(todos));

			event.target.reset();

			DisplayTodos();
		}
	})

	DisplayTodos(); //call this outside the new todo event listener so it runs as soon as the page is loaded

})


function DisplayTodos () {
	const todoList = document.querySelector('#todo-list');

	todoList.innerHTML = '';

	todos.forEach(todo => { //remember todos was declared without const/var/let so it is global and can be used here even though it was declared in the event listener function
		const todoItem = document.createElement('div');
		todoItem.classList.add('todo-item') //this adds a #todo-item class to the todoItem element. so end result is: <div class='todo-item'></div>
		const label = document.createElement('label');
		const input = document.createElement('input');
		const span = document.createElement('span');
		const content = document.createElement('div');
		const actions = document.createElement('div');
		const edit = document.createElement('button');
		const deleteButton = document.createElement('button');

		input.type = 'checkbox'; //checkbox indicates whether task is done or not done
		input.checked = todo.done;
		span.classList.add('bubble') //adds bubble class to the checkbox span element

		if (todo.category == 'personal' ) {
			span.classList.add('personal');
		} else {
			span.classList.add('business');
		}

		content.classList.add('todo-content');
		actions.classList.add('actions');
		edit.classList.add('edit');
		deleteButton.classList.add('delete');


		content.innerHTML = `<input type="text" value="${todo.content}" readonly>`

		edit.innerHTML = 'Edit';
		deleteButton.innerHTML = 'Delete';


		//use this to set up element children
		label.appendChild(input);
		label.appendChild(span);
		actions.appendChild(edit);
		actions.appendChild(deleteButton);
		todoItem.appendChild(label);
		todoItem.appendChild(content);
		todoItem.appendChild(actions);

		todoList.appendChild(todoItem);


		if (todo.done) {
			todoItem.classList.add('done');
		}

		input.addEventListener('click', event => {
			todo.done = event.target.checked;
			localStorage.setItem('todos', JSON.stringify(todos));

			if (todo.done) {
				todoItem.classList.add('done');
			} else {
				todoItem.classList.remove('done')
			}

			DisplayTodos();
		})

		edit.addEventListener('click', event => {
			const input = content.querySelector('input');
			input.removeAttribute('readonly');
			input.focus();
			input.addEventListener('blur', event => {
				input.setAttribute('readonly', true);
				todo.content = event.target.value;
				localStorage.setItem('todos', JSON.stringify(todos));
				DisplayTodos();
			})
		})

		deleteButton.addEventListener('click', event => {
			todos = todos.filter(t => t != todo);
			localStorage.setItem('todos', JSON.stringify(todos));
			DisplayTodos();
		})

	})
}
