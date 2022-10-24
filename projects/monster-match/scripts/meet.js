console.log("MEET.JS")

//Create variables for data outlets
const monsterList = document.querySelector('[data-outlet="monster-list"]')

const form = document.querySelector('[data-outlet="monster-filter"]')

//Run render functions - Monsters and selector menus
monsterList.innerHTML = renderMonsters(monstersData);
form.innerHTML = renderSelectors();



function propertySelected(property, monster, selected) {
	// an example property would be gender
	// e.g.: if monster[gender] == selected[gender]
	if (monster[property] == (selected[property]) || !(selected[property])) {
		console.log("monster property", monster[property]);
		return true;
	}
	return false;
}

//should return t/f for COLORS
function hasColor(colorList, monster) {
	for (let i=0; i <= colorList.length; i++ ) {
		if (colorList[i] == monster.color){
			return true;
		}
	}
	return false;
}

//should return t/f for AGES
function hasAge(ageList, monster) {
	
	if ((monster.age > 0) && (monster.age <=10)){
		monsterAgeGrouping = "Baby";
	} else if ((monster.age > 10) && (monster.age <= 50)) {
		monsterAgeGrouping = "Young";
	} else if ((monster.age > 50) && (monster.age <= 200)) {
		monsterAgeGrouping = "Adult";
	} else if (monster.age > 200) {
		monsterAgeGrouping = "Senior";
	}


	for (let i=0; i <= ageList.length; i++ ) {
		if (ageList[i] == monsterAgeGrouping){
			return true;
		}
	}
	return false;
}
	

//function to create list of selected colors (or other filters)
//get data from filter
function gatherColors(){

	checkedColors = [...form.querySelectorAll(".color-checkbox input:checked")];

	let colorList = [];
	checkedColors.forEach(function(item){
		colorList.push(item.value);
	})
	console.log("colorList: ",colorList)
	return colorList;
}

//function to create list of selected AGEs (or other filters)
//get data from filter
function gatherAges(){

	checkedAges = [...form.querySelectorAll(".age-checkbox input:checked")];

	let ageList = [];
	checkedAges.forEach(function(item){
		ageList.push(item.value);
	})
	console.log("ageList: ",ageList)
	return ageList;
}


//Event listener to detect changes in selections
//Arguments- Type of event (as a "string"), anonymous function
form.addEventListener("change", function(event) {
	console.clear();

	//handle filter- pass off to functions
	var colorList = gatherColors();
	var ageList = gatherAges();




	



//--------OLD----------
	//Node list (not array) of the form selectors used
	var inputNodeList = form.querySelectorAll('[data-input]'); 
	console.log("input node list: ", inputNodeList);
	//Convert node list to array using spread ...
	var inputArray = [...inputNodeList] //remember no space after ...
	console.log("input array: ", inputArray)

//Create list of any filters that arent set to "any"
	var filterList = 
		inputArray
			.filter( function(input) {
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

//--------/OLD-----------------



	//anytime input changes filter monster data and run render monsters again
	const monsterDataFiltered = monstersData.filter(function(monster) {

		return hasColor(colorList, monster) && propertySelected("gender",monster, filterObject) && hasAge(ageList, monster);

		//return propertySelected("color",monster, filterObject) && propertySelected("gender",monster, filterObject);
	})

	monsterList.innerHTML = renderMonsters(monsterDataFiltered);
})

