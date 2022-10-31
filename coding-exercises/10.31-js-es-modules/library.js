
const SOME_NUMBER = 879486;

function _double(number) {
	return number * 2;
}

function _triple(number) {
	return number * 3;
}

function _doUltimateMath(number) {
	return _double(number) + _triple(number) * SOME_NUMBER;
}

export {
	_doUltimateMath,
}