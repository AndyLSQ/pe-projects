console.clear()

//Global- print function
//(argument is note, default it to blank)
// Log a separator and note on one line, items (with static label) on the next line
// REMEMBER to add context (this) as the first argument
function print(context, note="") {
	console.log(`--- ${note} ---`);
	console.log(`Items: `, context.items)
}


//App object
const packingApp = {
	//Variables scoped to app (as object members)
	items: [],
	idCreator: 0, 

	add: function(content) {
		//create new item
		item = {
			id: this.idCreator++,
			content: content
		}
	
	//spreads existing todo list under "this" parent and adds new todo (from function above)
	this.items = [...this.items, item]
	
	print(this, `Added: ${item.content}`);
	},


	remove: function(id) {
		print(this, `Removed: ${this.items[id].content}`)
		delete this.items[id];
	},

	complete: function(id) {
		this.items[id].complete = true;
		print(this, `Completed: ${this.items[id].content}`) 
	},

	modify: function(id, newContent) {
		this.items[id].content = newContent;
		print(this, `Modified: ${newContent}`) 
	}
}


packingApp.add("t-shirts");
packingApp.add("jeans");
packingApp.add("jacket");
packingApp.add("socks");
packingApp.add("toothbrush");
packingApp.remove(2);
packingApp.complete(3);
packingApp.modify(1, "shorts");
