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
		// hello();
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
		// charCount();
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
		// printQuotes();
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
		// madLib();
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

	if (num1 && num2) {
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
	} else {
		alert("Please input all fields with nonzero numbers.");
		// simpleMath();
	}
}
var simpleMathButton = document.createElement('button');
simpleMathButton.addEventListener('click', simpleMath);
simpleMathButton.textContent = "Simple math";
document.querySelector('body').appendChild(simpleMathButton);


// 6. Retirement calculator
function retirement() {
	// Prompt for current age and desired retirement age
	var currentAge = Number(prompt('What is your current age?'));
	var retireAge = Number(prompt('At what age would you like to retire?'));

	if (currentAge && retireAge) {
	// Calculate years left until retirement
	var yearsLeft = retireAge - currentAge;

	// Calculate the clendar year of retirement
	var currentYear = 2022;
	var retireYear = currentYear + yearsLeft;

	// Display the number of years left until you retire, the current calendar year, and the calendar year of retirement
	outputString = "You have " + yearsLeft + " years left until you can retire.\nIt's " + currentYear + ", so you can retire in " + retireYear + ".";
	alert(outputString);
	} else {
		alert("Please input all fields with nonzero numbers.");
		// retirement();
	}
}
var retirementButton = document.createElement('button');
retirementButton.addEventListener('click', retirement);
retirementButton.textContent = "Retirement Calculator";
document.querySelector('body').appendChild(retirementButton);


// 7. Area of a rectangular room
function roomArea() {
	// Prompt for room length and width
	var length = Number(prompt('What is the length of the room in feet?'));
	var width = Number(prompt('What is the width of the room in feet?'));

	if (length && width) {
		// Calculate the room area in square feet
		sqFt = length * width

		// Calculate the room area in square meters
		sqM = Math.round(sqFt * 0.09290304)

		// Display the room area in both units
		var outputString = "The area of the room is " + sqFt + " square feet or " + sqM + " square meters."
		alert(outputString);
	} else {
		alert("Please input all fields with nonzero numbers.");
		// roomArea();
	}
}
var roomAreaButton = document.createElement('button');
roomAreaButton.addEventListener('click', roomArea);
roomAreaButton.textContent = "Room Area";
document.querySelector('body').appendChild(roomAreaButton);


// 8. Pizza party
function pizzaParty() {
	// Prompt for the number of people, number of pizzas, and number of slices per pizza
	var people = Number(prompt('How many people are at the party?'));
	var pizzas = Number(prompt('How many pizzas do you have?'));
	var slicesPerPizza = Number(prompt('How many slices does each pizza have?'));

	if (people && pizzas && slicesPerPizza) {
		// Calculate the number of slices each person should get (as a whole number)
		var slices = pizzas * slicesPerPizza;
		var slicesPerPerson = Math.floor(slices/people);


		// Calculate the number of leftover slices
		var leftovers = slices % people;

		// Display the number of slices each person will get and the number of leftover slices
		var outputString = "Each person gets " + slicesPerPerson + " slices of pizza.\nThere are " + leftovers + " leftover slices.";
		alert(outputString);


	} else {
		alert("Please input all fields with nonzero numbers.");
		// pizzaParty();
	}

}
var pizzaPartyButton = document.createElement('button');
pizzaPartyButton.addEventListener('click', pizzaParty);
pizzaPartyButton.textContent = "Pizza Party";
document.querySelector('body').appendChild(pizzaPartyButton);

// 9. Paint calculator
function paintCalc() {
	// Prompt for the length and width of the ceiling
	var length = Number(prompt('What is the length of the ceiling in feet?'));
	var width = Number(prompt('What is the width of the ceiling in feet?'));


	if (length && width) {
		// Calculate gallons of paint needed to cover the ceiling rounded *up* to the nearest gallon
		var area = length * width;
		var gallons = Math.ceil(area / 350);

		// Display the number of gallons needed and the square footage of the ceiling
		var outputString = "You will need to purchase " + gallons + " gallons of paint to cover " + area + " square feet.";
		alert(outputString);
	} else {
		alert("Please input all fields with nonzero numbers.");
		// paintCalc();
	}
}
var paintCalcButton = document.createElement('button');
paintCalcButton.addEventListener('click', paintCalc);
paintCalcButton.textContent = "Paint Calculator";
document.querySelector('body').appendChild(paintCalcButton);


// 10. Self checkout
function selfCheckout() {
	// Prompt for the price and quantity of 3 items
	var price1 = Number(prompt('Please enter the price of item 1.'));
	var quantity1 = Number(prompt('Please enter the quantity of item 1.'));
	var price2 = Number(prompt('Please enter the price of item 2.'));
	var quantity2 = Number(prompt('Please enter the quantity of item 2.'));
	var price3 = Number(prompt('Please enter the price of item 3.'));
	var quantity3 = Number(prompt('Please enter the quantity of item 3.'));

	if (price1 && quantity1 && price2 && quantity2 && price3 && quantity3) {
		// Calculate subtotal of these 3 items before tax
		var ep1 = price1 * quantity1;
		var ep2 = price2 * quantity2;
		var ep3 = price3 * quantity3;

		// Calculate total sales tax (rate is 5.5%)
		var tax1 = ep1 * .055;
		var tax2 = ep2 * .055;
		var tax3 = ep3 * .055;

		// Display each item with the quantity and extended price
		var output1 = "Item 1 | Unit Price: $" + price1 + " | Quantity: " + quantity1 + " | Extended Price: $" + ep1 + "\n";
		var output2 = "Item 2 | Unit Price: $" + price2 + " | Quantity: " + quantity2 + " | Extended Price: $" + ep2 + "\n";
		var output3 = "Item 3 | Unit Price: $" + price3 + " | Quantity: " + quantity3 + " | Extended Price: $" + ep3 + "\n";
	

		// Display the subtotal, sales tax amount, and grand total
		var subtotal = ep1 + ep2 + ep3;
		var tax = tax1 + tax2 + tax3;
		var total = subtotal + tax;

		var outputSubtotal = "Subtotal: $" + subtotal + "\n";
		var outputTax = "Tax: $" + tax + "\n";
		var outputTotal = "Total: $" + total;

		var outputString = output1 + output2 + output3 + outputSubtotal + outputTax + outputTotal;

		alert(outputString);

	} else {
		alert("Please input all fields with nonzero numbers.");
		// selfCheckout();
	}

}
var selfCheckoutButton = document.createElement('button');
selfCheckoutButton.addEventListener('click', selfCheckout);
selfCheckoutButton.textContent = "Self Checkout";
document.querySelector('body').appendChild(selfCheckoutButton);
