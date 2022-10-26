console.clear()


// (0) Declare global variables- items array and counter (starting from zero)
const items = [];
var count = 0;


// (1) Support functions- print 
//(argument is note, default it to blank)
// Log a separator and note on one line, items (with static label) on the next line
function print(note="") {
	console.log(`--------- ${note}`);
	console.log(`items: `, items)
}


// (2) Task functions- add, delete, complete, update
// Dont forget to make each item an object with an ID

function add(content) {
	const item = {
		id: `id-${count++}`,
		content: content
	}
	items.push(item)
	print(`Added ${content}`);
}

function remove(id) {
	print(`Removed ${items[id].content}`)
	delete items[id];
}

function complete(id) {
	items[id].completed = true;
	print(`Completed ${items[id].content}`)
}

function modify(id, newContent) {
	items[id].content = newContent;
	print(`Modified ${items[id].content}`)
}



// (3) Call a few times
add("t-shirts");
add("jeans");
add("jacket");
add("socks");
add("toothbrush");
remove(2); //?? Why can't I call by the full ID here (eg: "id-2")?
complete(3);
modify(1, "shorts");

