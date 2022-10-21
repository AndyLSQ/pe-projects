console.log("MEET.JS")

//Create variables for data outlets
const monsterList = document.querySelector('[data-outlet="monster-list"]')
const form = document.querySelector('[data-outlet="monster-filter"]')

//Run render functions - Monsters and selector menus
monsterList.innerHTML = renderMonsters(monstersData);
form.innerHTML = renderSelectors();



//Event listener to detect changes in selections
//Arguments- Type of event (as a "string"), anonymous function
form.addEventListener("change", function(event) {
	console.clear();
	//Select all data input 
	var inputNodeList = form.querySelectorAll('[data-input]') //(this returns a node list, not an array)
	console.log("input node list: ", inputNodeList)
	var inputArray = [...inputNodeList] //remember no space after ...
	console.log("input array: ", inputArray)

	var filterList = 
		inputArray
			.filter( function(input) { //filter for things that aren't "any"
				return input.value !== "any";
			})		
	;
	console.log("Filter LIST: ", filterList);

	//Convert filterList array to filterObject object
	let filterObject = {};
	filterList.forEach(function(option){ //option is the select element (html dropdown) TODO: REVIST FOREACH ANONYMOUS FUNCTION ARGUMENTS - OPTION, INDEX , ARRAY (foreach loop is different than a for loop)
		filterObject[option.dataset.input] = option.value;
	})
	console.log("filter object", filterObject);


	function propertySelected(property, monster, selected) {
		// an example property would be gender
		// e.g.: if monster[gender] == selected[gender]
		if (monster[property] == (selected[property]) || !(selected[property])) {
			console.log("monster property", monster[property]);
			return true;
		}
		return false;
	}


	//anytime input changes filter monster data and run render monsters again
	const monsterDataFiltered = monstersData.filter(function(monster) {

		return propertySelected("color",monster, filterObject) && propertySelected("gender",monster, filterObject);
	})

	monsterList.innerHTML = renderMonsters(monsterDataFiltered);
})

