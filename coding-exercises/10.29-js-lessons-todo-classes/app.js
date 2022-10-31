// -----------todo class-----------
class todoClass {
	//constructor
	constructor(id, content) {
		this.id = id;
		this.content = content;
		this.dateCreated = new Date();
		this.complete = false;
	};

	//functions- complete, modify(later), render

	toggleComplete() {
		this.complete = !this.complete
	}

	renderTodo() {
		return `
		<li data-id='${this.id}'>
			<todo-card class='${this.complete ? "complete" : ""}'>
				<h2>${this.content}</h2>

				<actions>
					<button>Remove</button>
					<button>Complete</button>
				</actions>
			</todo-card>
		</li>
		`;
	}
}

// -----------todolist class-----------
class todoListClass {
	//constructor
	constructor(name) {
		this.name = name;
		this.todos = [];
		this.lastId = 0;

		this.$form = document.querySelector('form');
		this.$input = this.$form.querySelector('input');
		this.$output = document.querySelector('output');

		this.addEventListeners();

	}

	//functions- add, remove, complete??, renderList, event listeners
	add(content) {
	// 	let todo = {
	// 		id: `a-${this.lastId++}`,
	// 		content,
	// 		complete: false,
	// 	};

		this.todos = [...this.todos, new todoClass(`a-${this.lastId++}`, content)];
		this.renderList(this.todos); 
		console.log("TODO LIST AFTER ADD: ", this.todos);
	}


	remove(id) {
		let filtered = this.todos.filter( function(todo) {
			return todo.id != id;
		});

		this.todos = [...filtered];
		this.renderList(this.todos);
		console.log("TODO LIST AFTER REMOVE: ", this.todos);
	}


	renderList(todos) {
		var template = "<ul>";
		this.todos.forEach( function(todo) {
			template += todo.renderTodo();
		});
		template += '</ul>'
		this.$output.innerHTML = template;
	}


	addEventListeners(){
		//set up with multiple listeners in 1 function
		this.$form.addEventListener('submit', (event) => { // => changes scope of "this" to the next level up (have to delete the word function)
			event.preventDefault();

			this.add( this.$input.value );
			this.$input.value = "";
			console.log('todos: ', this.todos);
		});

		this.$output.addEventListener( 'click', (event) => {
			console.log(event.target);

			if (event.target.textContent == 'Remove') {
				const id = event.target.closest('li').dataset.id; //use .closest() to find nearest element in the dom tree and dataset.id to access data properties (data-id is just made up, it could be data-anything)
				this.remove(id);
			}

			if (event.target.textContent == 'Complete') {
				const id = event.target.closest('li').dataset.id;
				var foundTodo = this.todos.find( function(todo) {
					return todo.id == id;
				})
				foundTodo.toggleComplete();
				this.renderList(this.todos);
			}
		});
	}
}

var todoList = new todoListClass("Tonight");
todoList.add ("Go to store"); // 0
todoList.add("Cook the food"); // 1


// app 
// ^
// todoListClass
// ^
// todoClass