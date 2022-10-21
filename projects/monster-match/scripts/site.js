console.clear()

console.log("SITE.JS")


//Render individual monsters
function renderMonster(monster) {
	return `
	<div class="monster-card" id="${monster.id}">
	<picture>
		<img src="${monster.image}" alt="Image of ${monster.name}">
	</picture>
	<h3>${monster.name}</h3>
	<div class='characteristics'>${monster.characteristics}</div>
	<ul class="demographic">
		<li>Age: ${monster.age} years</li>
		<li>Gender: ${monster.gender}</li>
	</ul>
	<a class="button1" href="?page=detail&id=${monster.id}">
			Learn more
	</a>
	`
}


// Loop the monster list and render the content for each
	function renderMonsters(monsters) {
		//randomly sort
		//monsters = monsters.sort(()=> Math.random() - 0.5);

		//create list structure
		var template = `<ul class='monster-list'>`

		//loop for each list item (remember the function argument is what defines the monster variable, and it's set by the loop)
		monsters.forEach(function(monster){
			//^This calls the singular renderMonster function (defined above) to add the current monster to the template array
			template += `<li class='monster'>${renderMonster(monster)}</li>`
		});

		//closing tag is added to the template, then the whole template is returned
		template +=`</ul>`

		return template;
	}

// CREATE OPTION LISTS
//look at monster data and retrieve all colors to create a color list
//map uses an "anonymous" function

//console.log(monsterColors);

//look at monster data and retrieve all genders to create a gender list

//console.log(monsterGenders);



//render INDIVIDUAL
function renderColorSelector() {
	let monsterColors = monstersData.map( function(monster) {
		return monster.color;
	});

	let unique = [...new Set(monsterColors)].sort();

	let select = `<select id="color-selector" data-input="color">`

	select += `<option value='any'>Any color</option>`

	unique.forEach( function(color) {
		select += `<option value='${color}'>${color}</option>`
	})
	select += `</select>`

	return select;
}

//render INDIVIDUAL
function renderGenderSelector() {
	let monsterGenders = monstersData.map( function(monster) {
		return monster.gender;
	});

	let unique = [...new Set(monsterGenders)].sort();

	let select = `<select id="gender-selector" data-input="gender">`

	select += `<option value='any'>Any gender</option>`

	unique.forEach( function(gender) {
		select += `<option value='${gender}'>${gender}</option>`
	})
	select += `</select>`

	return select;
}





//render ALL

function renderSelectors() {
	return renderColorSelector() + renderGenderSelector();
}



