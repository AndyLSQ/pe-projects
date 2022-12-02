//store status element selector
const statusDisplay = document.querySelector('.game--status');
const gameCells = document.querySelectorAll('.cell');
const restartButton = document.querySelector('.game--restart')

//starting game state variables
let gameActive = true; //allows pause when game ends
let currentPlayer = "X";
let gameState = ["", "", "", "", "", "", "", "", ""]; //array to track played cells

//messages (allow dynamic data)
const winningMessage = () => `Player ${currentPlayer} has won!`;
const drawMessage = () => `Game ended in a draw!`;
const currentPlayerTurn = () => `It's ${currentPlayer}'s turn`;

//start by showing current player's turn
statusDisplay.innerHTML = currentPlayerTurn();


//GAMEPLAY HANDLERS
function handleCellPlayed(clickedCell, clickedCellIndex){
	//update internal game state
	gameState[clickedCellIndex] = currentPlayer;

	//update UI
	clickedCell.innerHTML = currentPlayer;

	if (currentPlayer == "X") {
		clickedCell.style.color = "blue"
	} else {
		clickedCell.style.color = "red"
	}
}

function handlePlayerChange(){
	currentPlayer = currentPlayer === 'X' ? 'O' : 'X';
	statusDisplay.innerHTML = currentPlayerTurn();
}

//list of all possible winning combinations (for either player)
const winningConditions = [
	[0,1,2],
	[3,4,5],
	[6,7,8],
	[0,3,6],
	[1,4,7],
	[2,5,8],
	[0,4,8],
	[2,4,6]
];

function handleResultValidation(){
	let roundWon = false;
	
	//CHECK FOR WIN
	//loop thru 8 win conditions and see if any match
	for (let i = 0; i <= 7; i++) {
		const winCondition = winningConditions[i];
		// store all 3 cells from the current winning combo
		let a = gameState[winCondition[0]];
		let b = gameState[winCondition[1]];
		let c = gameState[winCondition[2]];
		// if any of them are blank, continue the game
		if (a === '' || b === '' || c === '') {
			continue;
		}
		//if none of the 3 are blank, check if theyre all filled by the same player
		if (a === b && b === c) {
			roundWon = true;
			break;
		}
	}

	//handle win
	if (roundWon) {
		statusDisplay.innerHTML = winningMessage();
		gameActive = false;
		return;
	}

	//CHECK FOR DRAW - no blanks left & (no winner above is implicit)
	let roundDraw = !gameState.includes("");

	//handle draw
	if (roundDraw) {
		statusDisplay.innerHTML = drawMessage();
		gameActive = false;
		return;
	}

	//if game is still going, change the player
	handlePlayerChange();
}

function handleCellClick(clickedCellEvent) {
	//get clicked cell and its index
	const clickedCell = clickedCellEvent.target;
	const clickedCellIndex = parseInt(clickedCell.getAttribute('data-cell-index'));
	
	//check if cell was already played or game is paused
	if (gameState[clickedCellIndex] !== "" || !gameActive) {
		//if either, return here to exit function without taking action on the click
		console.log("on click ignore: ", gameState);
		return;
	}
	
	//If cell and game are ok to process
	handleCellPlayed(clickedCell, clickedCellIndex);
	handleResultValidation();
	console.log("on click processed: ", gameState);
}

function handleRestartGame() {
	// reset variables & status display
	gameActive = true;
	currentPlayer = "X";
	gameState = ["", "", "", "", "", "", "", "", ""];

	statusDisplay.innerHTML = currentPlayerTurn();

	gameCells.forEach(cell => cell.innerHTML = "");
	console.log("on restart: ", gameState);
}

//EVENT LISTENERS
gameCells.forEach( cell => cell.addEventListener('click', handleCellClick));
restartButton.addEventListener('click', handleRestartGame);
