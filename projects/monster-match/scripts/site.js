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

function renderNoResults() {
	return`
		<picture>
			<img src="images/icons/monster-sad.png" alt="Monsters icons created by Smashicons - Flaticon https://www.flaticon.com/free-icons/monsters">
		</picture>
		<h2 class="loud-voice3"> No Monsters Found</h2>
		<p>There are no monsters matching your criteria. Please consider broadening your search.</p>
	 `
}



// Loop the monster list and render the content for each
function renderMonsters(monsters) {

	if (monsters.length < 1) {
		return renderNoResults();
	}

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


// --- CHECK BOXES - ALL / CLEAR 
	
function toggleAll(property, event) {
	console.log("toggle property: ",property);
	console.log("toggle event: ",event);
	const things = document.querySelector(`[data-checkbox="${property}"]`).querySelectorAll('input');
	[...things].forEach( function(thing) {
		thing.checked = event.target.checked;
	});
}



// ---- CREATE OPTION LISTS ----

//Retrieve all COLORs from monster data to create color filter checkbox lists
function renderColorSelector() {
	let monsterColors = monstersData.map( function(monster) {
		return monster.color;
	});

	let unique = [...new Set(monsterColors)].sort();

	let select = `<div data-checkbox="color">`

	select += `
		<div class="color-checkbox" >
			<input type="checkbox" id="toggle-all-color" checked>
			<label for='toggle-all-color'>All</label>
		</div>`

	unique.forEach( function(color) {
		select += `
		<div class="color-checkbox">
			<input type="checkbox" id="${color}-checkbox" value="${color}" checked>
			<label for='${color}-checkbox'>${color}</label>
		</div>`
	})

	select += `</div>`

	return select;
}

//render AGE
function renderAgeSelector() {
	let monsterAgeGroups = ["Baby", "Young", "Adult", "Senior"];

	let select = `<div data-checkbox="age">`

	select += `
		<div class="age-checkbox" >
			<input type="checkbox" id="toggle-all-age" checked>
			<label for='toggle-all-age'>All</label>
		</div>`

	monsterAgeGroups.forEach( function(ageGroup) {
		select += `
		<div class="age-checkbox" >
			<input type="checkbox" id="${ageGroup}-checkbox" value="${ageGroup}" checked>
			<label for='${ageGroup}-checkbox'>${ageGroup}</option>
		</div>`
	})
	select += `</div>`

	return select;
}

//.. for GENDERs
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

//.. for vaccinated (boolean only)
function renderVaccinatedSelector() {

	let select = `
		<select id="vaccinated-selector" data-input="vaccinated">
			<option value='any'>Any (Vaccinated)</option>
			<option value='true'>Yes</option>
			<option value='false'>No</option>
		</select>`

	return select;
}

//.. for housebroken (boolean only)
function renderHousebrokenSelector() {

	let select = `
		<select id="housebroken-selector" data-input="housebroken">
			<option value='any'>Any (Housebroken)</option>
			<option value='true'>Yes</option>
			<option value='false'>No</option>
		</select>`

	return select;
}







//render ALL

function renderSelectors() {
	return renderColorSelector() + renderAgeSelector() + renderGenderSelector() + renderVaccinatedSelector() + renderHousebrokenSelector() ;
}



