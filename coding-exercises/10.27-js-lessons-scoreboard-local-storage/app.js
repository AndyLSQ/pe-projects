// const scoreboard = document.querySelector('.scoreboard-test');
const score1 = document.querySelector('.score1');
const score2 = document.querySelector('.score2');
// scoreboard.innerHTML = renderScore(); 


//todo with buttons
const data = localStorage;

game = undefined;

function initialize() {
	if (data.getItem('game')) { 
		game = get();
	} else {
		game = {
			'team1': 0,
			'team2': 0
		}
	}
	save();
	renderScore()
}

initialize();

function save() {
	data.setItem('game', JSON.stringify(game));
}

function get() {
	return JSON.parse(data.getItem('game'))
}

function addPoint(team) {
	//console.log(team);
	game[team]++;
	save();
	console.log("game: ", game)
	renderScore()
}

function renderScore() {
	gameScore =  get(game)
	// console.log("game score: ", gameScore)
	
	score1.innerHTML = `${game.team1}`
	score2.innerHTML = `${game.team2}`

	// scoreboard.innerHTML = `
	// 	<div class="name1">${Object.keys(game)[0]}</div>
	// 	<div class="score1">${game.team1}</div>
	// 	<div class="name2">${Object.keys(game)[1]}</div>
	// 	<div class="score2">${game.team2}</div>
	// `
}

function restartGame() {
	data.clear();
	initialize();
}



window.addEventListener('click', function(event){
	if ( event.target.matches('[data-team]') ) {
		var team = event.target.dataset.team;
		addPoint(team); //DATASET Concept
		//console.log(team);
	}
	if (event.target.matches('[data-action') ) {
		restartGame()
	}
})
