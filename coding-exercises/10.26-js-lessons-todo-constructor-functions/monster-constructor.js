console.clear()

function Monster(name, age) { //make the constructor function name uppercase

	//var this = {};

	this.name = name;
	this.age = age;

	this.roar = function() {
		alert(`${this.name}!!!!`)

	}

	//returns this

}

const chunky = new Monster("Chunky", 15); //use **new** keyword to invoke a constuctor function

const munchy = new Monster("Munchy", 45);

// chunky.roar();

console.log(munchy.age);

munchy.roar();

Monster.prototype.whisper = function() {
	console.log(`... hi my name is ${this.name}`)
}

chunky.whisper();
