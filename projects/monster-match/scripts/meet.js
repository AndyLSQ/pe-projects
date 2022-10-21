console.log("MEET.JS")

const monsterList = document.querySelector('[data-outlet="monster-list"]')

const form = document.querySelector('[data-outlet="monster-filter"]')

monsterList.innerHTML = renderMonsters(monstersData);


// console.log(renderSelectors());



form.innerHTML = renderSelectors();




// type of event (as a "string"), anon function
form.addEventListener("change", function(event) {

	console.clear();

	var inputNodeList = form.querySelectorAll('[data-input]') //(this returns a node list, not an array)
	var inputArray = [...inputNodeList] //remember no space after ...
	// console.log("HIIII", inputArray);

	var filterList = 
		inputArray
			.filter( function(input) { //filter for things that aren't any
				return input.value !== "any";
			})		
	;

	console.log("Filter LIST: ", filterList);

	let filterObject = {};
	filterList.forEach(function(option){ //option is the select element (html dropdown) TODO: REVIST FOREACH ANONYMOUS FUNCTION ARGUMENTS - OPTION, INDEX , ARRAY (foreach loop is different than a for loop)
		filterObject[option.dataset.input] = option.value;
	})



	console.log("filter object", filterObject);


	function propertySelected(property, monster, selected) {
		if (monster[property] == (selected[property]) || !(selected[property])) {
			console.log("monster property", monster[property]);
			return true;
		}

		return false;
	}


	//anytime input changes filter monster data and run render monsters again
	const monsterDataFiltered = monstersData.filter(function(monster) {
		// this return 
		return propertySelected("color",monster, filterObject) && propertySelected("gender",monster, filterObject);
	})

	monsterList.innerHTML = renderMonsters(monsterDataFiltered);
})

