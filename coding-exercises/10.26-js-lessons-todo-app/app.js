
//ASSIGNMENT: Create constructor functions for the todo app (as a whole)
// Pick one function (COMPLETE) and add it later using the prototype

function print(context, note=""){
	console.log(`--- ${note} ---`);
	console.log(`Todos: `, context.todos); //Context.todos cant be inside the backticks here
};

idIncrementor = 0;

function generateId() {
	return "a-"+idIncrementor++;
}


function Todo(content) {
	this.id = generateId();
	this.content = content;
	this.completed = false;

	this.toggle = function(){
		this.completed = !this.completed;
	}
}

//could have filtered list of completed items only

function TodoApp(name) { //make the constructor function name uppercase
	this.name = name;
	this.todos = [];

	this.add = function(content) {
		this.todos =  [...this.todos, new Todo(content)]
		console.log("todos: ",this.todos)
	};

	this.findById = function(id) {
		return this.todos.find(function(todo){
			return todo.id = id;
		})
	}

	this.toggle = function(id) {
		this.findById(id).toggle();
	} 

	this.remove = function(id) {
		const filteredList = this.todos.filter(function(todo){
			return todo.id != id; 
		})

		this.todos = filteredList;
		console.log("todos: ",this.todos)
	}

	this.update = function(id, newContent) {
		this.findById(id).content = newContent;
	}

	console.log("todos: ",this.todos)
}

const app1 = new TodoApp('groceries'); //creating an instance of the app (instanciating)
console.log("app name: ", app1.name);

app1.add("bananas");
app1.add("apples");
app1.add("nuts");
app1.toggle("a-0");

// app1.remove(0);
// app1.update (1, "pears");