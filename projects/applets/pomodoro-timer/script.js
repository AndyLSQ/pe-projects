//assign query selectors to variables
const pomoTimer = document.querySelector('.pomo-timer')
const startButton = document.querySelector('#pomo-start')
const stopButton = document.querySelector('#pomo-stop')

let currentTaskLabel = document.querySelector('#pomo-clock-task')

let workDurationInput = document.querySelector('#input-work-duration')
let breakDurationInput = document.querySelector('#input-break-duration')

//add event listeners
startButton.addEventListener('click', () => {
	toggleClock()
})

stopButton.addEventListener('click', () => {
	toggleClock(true)
})


let updatedWorkSessionDuration
let updatedBreakSessionDuration

//listener - update work time
workDurationInput.addEventListener('input', () => {
	updatedWorkSessionDuration = minuteToSeconds(workDurationInput.value)
})

breakDurationInput.addEventListener('input', () => {
	updatedBreakSessionDuration = minuteToSeconds(breakDurationInput.value)
})

const minuteToSeconds = (mins) => {
	return mins * 60
}


let isClockRunning = false
let isClockStopped = true


// in seconds = 25 mins
let workSessionDuration = 1500
let currentTimeLeftInSession = 1500

//in seconds = 5 mins
let breakSessionDuration = 300

let type = 'Work'
let timeSpentInCurrentSession =  0



workDurationInput.value = '25'
breakDurationInput.value = '5'


const toggleClock = (reset) => {
	togglePlayPauseIcon(reset);
	if (reset) {
		//stop the timer
		stopClock()
	} else {
		//new
		if (isClockStopped) {
			setUpdatedTimers()
			isClockStopped = false
		}
		if (isClockRunning === true) {
		//pause the timer
		clearInterval(clockTimer)
		//update icon to play icon
		//set value of button to start or pause
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
			isClockRunning = true
		}
		showStopIcon()
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
	setUpdatedTimers()
	displaySessionLog(type)
	// reset timer
	clearInterval(clockTimer)

	isClockStopped = true
	isClockRunning = false

	//reset time left in session
	currentTimeLeftInSession = workSessionDuration

	//update timer display
	displayCurrentTimeLeftInSession()
	type = 'Work' //always reset to work after stopping bc it wouldnt make sense to reset break session to start another break

	timeSpentInCurrentSession = 0;
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
				setUpdatedTimers();
				//new
				currentTaskLabel.value = 'Break';
				currentTaskLabel.disabled = true;
			} else {
				currentTimeLeftInSession = workSessionDuration;
				displaySessionLog('Break')
				type = 'Work'
				setUpdatedTimers();
				//new
				if (currentTaskLabel.value === 'Break'){
					currentTaskLabel.value = workSessionLabel;
				}
				currentTaskLabel.disabled = false;
				displaySessionLog('Break')
			}
	}
	displayCurrentTimeLeftInSession()
}

const displaySessionLog = (type) => {
	const sessionsList = document.querySelector('#pomo-sessions')
	//append li
	const li = document.createElement('li')
	// let sessionLabel = type
	if (type === 'Work') {
		sessionLabel = currentTaskLabel.value ? currentTaskLabel.value : 'Work'
		workSessionLabel = sessionLabel
	} else {
		sessionLabel = 'Break'
	}

	let elapsedTime = parseInt(timeSpentInCurrentSession / 60)
	elapsedTime = elapsedTime > 0 ? elapsedTime : '< 1'

	const text = document.createTextNode(`${sessionLabel} : ${elapsedTime} min`)
	li.appendChild(text)
	sessionsList.appendChild(li)
}

const setUpdatedTimers = () => {
	if (type === 'Work') {
		currentTimeLeftInSession = updatedWorkSessionDuration ? updatedWorkSessionDuration : workSessionDuration
		workSessionDuration = currentTimeLeftInSession
	} else {
		currentTimeLeftInSession = updatedBreakSessionDuration ? updatedBreakSessionDuration : breakSessionDuration
		breakSessionDuration = currentTimeLeftInSession
	}
}

const togglePlayPauseIcon = (reset) => {
	const playIcon = document.querySelector('#play-icon')
	const pauseIcon = document.querySelector('#pause-icon')
	// when resetting, always revert to play icon
	if(reset) {
		if (playIcon.classList.contains('hidden')) {
			playIcon.classList.remove('hidden')
		}
		if (!pauseIcon.classList.contains('hidden')) {
			pauseIcon.classList.add('hidden')
		}
	} else {
		// otherwise if not resetting, just toggle
		playIcon.classList.toggle('hidden')
		playIcon.classList.toggle('hidden')
	}
}

const showStopIcon = () => {
	stopButton.classList.remove('hidden')
}

