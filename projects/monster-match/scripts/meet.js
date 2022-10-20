console.log("MEET.JS")

const monsterList = document.querySelector('[data-outlet="monster-list"]')

const form = document.querySelector('[data-outlet="monster-filter"]')

monsterList.innerHTML = renderMonsters(monstersData);


// console.log(renderSelectors());



form.innerHTML = renderSelectors();




// type of event (as a "string"), anon function
form.addEventListener("change", function(event) {


	var inputNodeList = form.querySelectorAll('[data-input]') //(this returns a node list, not an array)
	var inputArray = [...inputNodeList] //remember no space after ...
	// console.log("HIIII", inputArray);

	var filterList = 
		inputArray
			.filter( function(input) { //filter for things that aren't any
				return input.value !== "any";
			})
			.map(function(input){ //map the array with these non-any values
				
			inputKey = input.dataset.input
				return {
					[input.dataset.input]: input.value,
				};
			})
	;



	console.log("filter list", filterList);

	//anytime input changes filter monster data and run render monsters again
	const monsterDataFiltered = monstersData.filter(function(monster) {
		//looking at each monster
		console.log(monster.name);
		// console.log("FILTER LIST HERE: ", filterList);
		//console.log("COLOR HERE: ", filterList[0].color);

		//for each property
		//colorMatch = null;

		for(i=0; i<filterList.length; i++){
			if (filterList[i].color) {
				console.log("FILTER IS COLOR");
				//colorMatch = (filterList[i].color == monster.color)
				if (filterList[i].color == monster.color){
					let colorMatch = true;
					console.log("Color Match: ", colorMatch);
				} else {
					colorMatch = false;
					console.log("Color Match: ", colorMatch);
				}
			} else {
				// console.log("FILTER IS NOT COLOR");
			}
			if (filterList[i].gender) {
				console.log("FILTER IS gender");
				if (filterList[i].gender == monster.gender){
					let genderMatch = true;
					console.log("gender Match: ", genderMatch);
				} else {
					genderMatch = false;
					console.log("gender Match: ", colorMatch);
				}
			}
				else {
				// console.log("FILTER IS NOT GENDER");
			}

			//console.log("Color Match: ", colorMatch);

			filterMatch = colorMatch && genderMatch;
			console.log("Filter Match: ", filterMatch);
		}

		//console.log("all monsters");
		
		//if monster property value == filtered value, return monster, else proceed to next
	})

	monsterList.innerHTML = renderMonsters(monsterDataFiltered);
})

