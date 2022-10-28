const scoreboard = document.querySelector('.scoreboard');
scoreboard.innerHTML = "HELLOOOO" 


//todo with buttons
const data = localStorage;

game = undefined;

function initialize() {
	if (data.getItem('game')) { 
		game = get();
	} else {
		game = {
			team1: 0,
			team2: 0
		}
	}
	save();
}

initialize();

function save() {
	data.setItem('game', JSON.stringify(game));
}

function get() {
	return JSON.parse(data.getItem('game'))
}

function addPoint(team) {
	console.log(team);
	game[team]++;
	save();
}

function restartGame() {
	data.clear();
	initialize();
}

function renderScore() {
	scores = `
		<div class="team1 score"></div>
		<div class="team2 score"></div>
	`

	return
}

window.addEventListener('click', function(event){
	if ( event.target.matches('[data-team]') ) {
		var team = event.target.dataset.team;
		addPoint(team); //DATASET Concept
		console.log(team);
	}
	if (event.target.matches('[data-action') ) {
		restartGame()
	}
})
