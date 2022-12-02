//assign buttons with event listeners
const pomoTimer = document.querySelector('.pomo-timer')
const startButton = document.querySelector('#pomo-start')
const pauseButton = document.querySelector('#pomo-pause')
const stopButton = document.querySelector('#pomo-stop')

startButton.addEventListener('click', () => {
	toggleClock()
})

pauseButton.addEventListener('click', () => {
	toggleClock()
})

stopButton.addEventListener('click', () => {
	toggleClock(true)
})


let isClockRunning = false

// in seconds = 25 mins
let workSessionDuration = 1500
let currentTimeLeftInSession = 1500

//in seconds = 5 mins
let breakSessionDuration = 300

let type = 'Work'
let timeSpentInCurrentSession =  0

const toggleClock = (reset) => {
	if (reset) {
		//stop the timer
		stopClock()
	} else {
		if (isClockRunning === true) {
		//pause the timer
		clearInterval(clockTimer)
		isClockRunning = false;
		} else {
			//start the timer
			console.log("starting timer...")
			isClockRunning = true;

			clockTimer = setInterval(() => {
				//decrease time left / increase time spent
				stepDown();
				displayCurrentTimeLeftInSession();
			}, 1000)
		}
	}
}

const displayCurrentTimeLeftInSession = () => {
	const secondsLeft = currentTimeLeftInSession
	let result = '';
	const seconds = secondsLeft % 60;
	const minutes = parseInt(secondsLeft / 60) % 60;
	let hours = parseInt(secondsLeft / 3600);
	
	//add leading zeroes if >10
	function addLeadingZeroes(time) {
		return time < 10 ? `0${time}` : time
	}

	if (hours > 0) result += `${hours}:`
	result += `${addLeadingZeroes(minutes)}:${addLeadingZeroes(seconds)}`;
	
	console.log('result is: ', result)
	pomoTimer.innerText = result;
	
}

const stopClock = () => {
	displaySessionLog(type)
	//1) reset timer
	clearInterval(clockTimer)

	//2) update is clock running variable
	isClockRunning = false

	//reset time left in session
	currentTimeLeftInSession = workSessionDuration

	timeSpentInCurrentSession = 0;

	//update timer display
	displayCurrentTimeLeftInSession()
	type = 'Work' //always reset to work after stopping bc it wouldnt make sense for user to reset break session to start another break
}

const stepDown = () => {
	if (currentTimeLeftInSession > 0) { //if timer still running
		//Decrease time left / increase time spent
		currentTimeLeftInSession--
		timeSpentInCurrentSession++
	} else if (currentTimeLeftInSession === 0) { //if timer ends
		timeSpentInCurrentSession = 0
		//Toggle work/break
			if (type === 'Work') {
				currentTimeLeftInSession = breakSessionDuration;
				displaySessionLog('Work')
				type = 'Break'
			} else {
				currentTimeLeftInSession = workSessionDuration;
				displaySessionLog('Break')
				type = 'Work'
			}
	}
	displayCurrentTimeLeftInSession()
}

const displaySessionLog = (type) => {
	const sessionsList = document.querySelector('#pomo-sessions')
	//append li
	const li = document.createElement('li')
	let sessionLabel = type
	let elapsedTime = parseInt(timeSpentInCurrentSession / 60)
	elapsedTime = elapsedTime > 0 ? elapsedTime : '< 1'

	const text = document.createTextNode(`${sessionLabel} : ${elapsedTime} min`)
	li.appendChild(text)
	sessionsList.appendChild(li)
}