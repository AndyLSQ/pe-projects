//E4P Pseudocode


// 1. Saying Hello
function hello() {
	// Prompt for user's name
	var userName = prompt('What is your name?');
	// Print greeting using user's name
	if (userName) {
		var message = "Hello, " + userName + ", nice to meet you!";
		alert(message);
	} else {
		alert("Please enter your name.");
		hello();
	}
}
var helloButton = document.createElement('button');
helloButton.addEventListener('click', hello);
helloButton.textContent = "Saying hello";
document.querySelector('body').appendChild(helloButton);


// 2. Counting the number of characters
function charCount() {
	// Prompt for input string
	var inputString = prompt('What is the input string?');
	
	if(inputString) {
		// Count number of characters in string
		var inputLength = inputString.length;

		// Display output showing input string and number of characters
		var outputString = inputString + " has " + inputLength + " characters.";
		alert(outputString);
	} else {
		alert("Please input a string.");
		charCount();
	}
}
var charCountButton = document.createElement('button');
charCountButton.addEventListener('click', charCount);
charCountButton.textContent = "Character count";
document.querySelector('body').appendChild(charCountButton);


// 3. Printing quotes
function printQuotes() {
	// Prompt for quote and author
	var quote = prompt('What is the quote?');
	var author = prompt('Who is the author?');

	// Display quote and author in a single output string
	if (quote && author) {
		var outputString = author + " said \"" + quote + "\".";
		alert(outputString); 
	} else {
		alert("Please enter a quote and author.");
		printQuotes();
	}

}
var printQuotesButton = document.createElement('button');
printQuotesButton.addEventListener('click', printQuotes);
printQuotesButton.textContent = "Print quotes";
document.querySelector('body').appendChild(printQuotesButton);


// 4. Mad Lib
function madLib() {
	// Prompt for a noun, verb, adverb, and adjective
	var noun = prompt('Please enter a noun');
	var verb = prompt('Please enter a verb');
	var adverb = prompt('Please enter an adverb');
	var adjective = prompt('Please enter an adjective');

	if (noun && verb && adverb && adjective) {
	// Add inputs into a pre-existing mad-lib template
		outputString = "Do you " + verb + " your " + adjective + " " + noun + " " + adverb + "? Thats hilarious."

	// Display the completed mad-lib
	alert(outputString)
	} else {
		alert("Please enter all fields.");
		madLib();
	}

}
var madLibButton = document.createElement('button');
madLibButton.addEventListener('click', madLib);
madLibButton.textContent = "Mad lib";
document.querySelector('body').appendChild(madLibButton);


// 5. Simple math
function simpleMath() {
	// Prompt for 2 numbers
	var num1 = Number(prompt('Please enter the first number'));
	var num2 = Number(prompt('Please enter the second number'));

	// Calculate the sum of the numbers
	var sum = num1 + num2;
	var sumString = num1 + " + " + num2 + " = " + sum;

	// Calculate the difference of the numbers
	var diff = num1 - num2;
	var diffString = num1 + " - " + num2 + " = " + diff;

	// Calculate the product of the numbers
	var prod = num1 * num2;
	var prodString = num1 + " * " + num2 + " = " + prod;

	// Calculate the quotient of the numbers
	var quot = num1 / num2;
	var quotString = num1 + " / " + num2 + " = " + quot;

	// Display results
	outputString = sumString + "\n" + diffString + "\n" + prodString + "\n" + quotString;
	alert(outputString);

}
var simpleMathButton = document.createElement('button');
simpleMathButton.addEventListener('click', simpleMath);
simpleMathButton.textContent = "Simple math";
document.querySelector('body').appendChild(simpleMathButton);


// 6. Retirement calculator
function retirement() {
	// Prompt for current age and desired retirement age
	// Calculate years left until retirement
	// Calculate the clendar year of retirement
	// Display the number of years left until you retire, the current calendar year, and the calendar year of retirement

}
var retirementButton = document.createElement('button');
retirementButton.addEventListener('click', retirement);
retirementButton.textContent = "Retirement Calculator";
document.querySelector('body').appendChild(retirementButton);


// 7. Area of a rectangular room
function roomArea() {
	// Prompt for room length and width
	// Calculate the room area in square feet
	// Calculate the room area in square meters
	// Display the room area in both units

}
var roomAreaButton = document.createElement('button');
roomAreaButton.addEventListener('click', roomArea);
roomAreaButton.textContent = "Room Area";
document.querySelector('body').appendChild(roomAreaButton);


// 8. Pizza party
function pizzaParty() {
	// Prompt for the number of people, number of pizzas, and number of slices per person
	// Calculate the number of slices each person should get (as a whole number)
	// Calculate the number of leftover slices
	// Display the number of slices each person will get and the number of leftover slices

}
var pizzaPartyButton = document.createElement('button');
pizzaPartyButton.addEventListener('click', pizzaParty);
pizzaPartyButton.textContent = "Pizza Party";
document.querySelector('body').appendChild(pizzaPartyButton);

// 9. Paint calculator
function paintCalc() {
	// Prompt for the length and width of the ceiling
	// Calculate gallons of paint needed to cover the ceiling rounded *up* to the nearest gallon
	// Display the number of gallons needed and the square footage of the ceiling

}
var paintCalcButton = document.createElement('button');
paintCalcButton.addEventListener('click', paintCalc);
paintCalcButton.textContent = "Paint Calculator";
document.querySelector('body').appendChild(paintCalcButton);


// 10. Self checkout
function selfCheckout() {
	// Prompt for the price and quantity of 3 items
	// Calculate subtotal of these 3 items before tax
	// Calculate total sales tax (rate is 5.5%)
	// Display each item with the quantity and extended price
	// Display the subtotal, sales tax amount, and grand total

}
var selfCheckoutButton = document.createElement('button');
selfCheckoutButton.addEventListener('click', selfCheckout);
selfCheckoutButton.textContent = "Self Checkout";
document.querySelector('body').appendChild(selfCheckoutButton);