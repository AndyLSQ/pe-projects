<?php 
	$json = file_get_contents("data/meet.json");
	$monsterData = json_decode($json, true);

?>


<h2 class="loud-voice1">Meet the Monsters</h2>

<!-- <div class="swatch neutral-lighter">neutral-lighter</div>
<div class="swatch neutral-light">neutral-light</div>
<div class="swatch neutral">neutral</div>
<div class="swatch neutral-dark">neutral-dark</div>
<div class="swatch neutral-darker">neutral-darker</div> -->



<!-- DISPLAY CARDS -->
<ul class="monsters" data-outlet="monster-list">

</ul>

<script>
console.clear();
var monstersData = <?=$json?>;
//console.log(monstersData);


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
		monstersData.forEach(function(monster){
			//^This calls the singular renderMonster function (defined above) to add the current monster to the template array
			template += `<li class='monster'>${renderMonster(monster)}</li>`
		});

		//closing tag is added to the template, then the whole template is returned
		template +=`</ul>`

		return template;
	}


	let monster_outlet = document.querySelector('[data-outlet="monster-list"]')
	monster_outlet.innerHTML = renderMonsters();


</script>