console.clear()

console.log(monster_data);

//render 1 monster
//function that returns the card html with template strings

function renderMonster(singleMonster) {
	//needs to return monster template
	return `
		<li>${singleMonster.name} </li>



	`
}


//render all monsters
//loops over monsters and creates another template
function renderMonsters(monsterList) {

}


let monster_outlet = document.querySelector('[data-outlet="monster-list"]')