console.clear()

function print (note = "") {
	console.log(`------------- ${note}`)
	console.log('todos: ', todos);
}

const todos = [];
var count = 0;

console.log('todos: ', todos);

function add(content) {
	const todo = {
		id: `a-${count++}`,
		content: content,
	};

	todos.push(todo);
	print(`Added ${content}`);
}

function remove(id) {
	print(`Removed ${todos[id].content}`);
	//todos.splice(id, 1);
	delete todos[id];
}

function complete(id) {
	todos[id].complete = true;
	print(`Completed ${todos[id].content}`);
}

function update(id, newContent) {
	// CHALLENGE: FILL THIS IN;
	todos[id].content = newContent;
	print(`Updated ${todos[id].content}`);
}


	// DO MY OWN REAL WORLD EXAMPLE, REWRITING THE WHOLE THING BY HAND

add("Go to the store");
add("Prepare dinner");

complete(0);

add("Make this video");


remove(1);

add("Go to sleep!");

update(2, "Make this video better");