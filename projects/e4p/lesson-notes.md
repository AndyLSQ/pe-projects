# Forms in PHP/HTML

## Lesson Tasks

<details>
	<summary>Lesson 121</summary>

- [x] 1. Add perpetual-education, sheriffderek, and bdlowery as a contributors collaborators on your pe-projects so that we can leave notes for you.

- [x] 2. Make sure you all have a lesson-notes.md (markdown file) in the root of your pe-projects folder.

- [x] 3. Take any notes, questions from the lecture/videos and commit those (and share the link when you’re done)

- [x] 4. Watch this video: https://perpetual.education/resources/styling-forms-part-1/ and start thinking about form styling.

- [x] 5. You’ll be making a lot of forms for practice. So, how about we put them somewhere similar for everyone. /user/projects/efp 

- [ ] 6. Create an index page for the forms you have so far - that links to each form

- [x] 7. Set things up so that the forms all pull from a single set of styles. Consider matching it to your personal site and using that - or having a forms page specific styling (there’s no reason to restyle the inputs on every page, right?)

- [x] 8. How about 4 forms (in total) (and with normalized styles) (and tested). Use exercises from the EFP book.

- [x] 9. Get together with another student - and take turns walking through 2 of your forms.

- [ ] 10. Try and add one thing to the https://github.com/perpetual-education/audiophile-data
</details>

<details>
	<summary>Lesson 122</summary>

- [x] 1. Explore documentation for additional PHP functions and take notes

- [ ] 2. Create 2 more forms using these new functions

- [ ] 3. Get together with another student and look over each of your exercises for the day

</details>


## Notes



### Basic elements to include when setting up a form:
- PHP
	- Initalize variables
	- Calculation function (as needed)
	- Compile return statement
	- If statements to confirm submission and validate inputs
	- statements to assign inputs to PHP variables


- HTML
	- `<form method="POST">`
		-	`<div class="field">`
			-	`<label>`
			-	`<input type="text or number" name="num1" min="1" max="10" REQUIRED>`
		- `</div>`
		- 	`<button type="submit" name="submitted">Submit</button>`
	- `</form>`
	- `<output></output>`


### Styling
- Some different input types- These are attributes of the input element
	- `number`
	- `radio`
	- `checkbox`
- Button is a separate element
	- `<button>Button text</button>`
- Browsers have user agent styles that define visual appearance of the form. Think about what you would need to include in a form "reset".
- Styling defaults for input boxes (found in chrome inspector user agent stylesheet)  
```
input { 
	font-style: ;  
	display: inline-block;  
	margin: 0em;   
	padding: 1px 2px;   
	border-width: 2px;
}  
```

<details>
<summary>Expand to see more</summary>
```
	writing-mode: horizontal-tb !important;  
	font-variant-ligatures: ;  
	font-variant-caps: ;  
	font-variant-numeric: ;  
	font-variant-east-asian: ; 
	font-weight: ; 
	font-stretch: ; 
	font-size: ;  
	font-family: ;  
	text-rendering: auto;  
	color: fieldtext;  
	letter-spacing: normal;  
	word-spacing: normal;  
	line-height: normal;  
	text-transform: none;  
	text-indent: 0px;  
	text-shadow: none;  
	text-align: start;  
	appearance: auto;  
	-webkit-rtl-ordering: logical;  
	cursor: text;  
	background-color: field;  
	border-style: inset;  
	border-color: -internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133));  
	border-image: initial;
```
</details>


### Function Exploration

- **isset()** Determine if a variable is declared and not null.
	- Returns boolean
- **unset()** Destroys variables (only local var if inside a function)
- **strlen()** Returns length of a string (in *BYTES* not *characters*)
- **strrev()** Reverses a string
- **strtolower()** Make a string lowercase
	- **strtoupper()**
	- **ucfirst()** Make strings first character uppercase
	- **ucwords()** Uppercase first letter of every word
	- **mb_strtolower()** Make a string lowercase
- **strround($number, $precision= , $mode= )**
	-Precision can be negative, default is 0
- **trim()** strips whitespace from beginning and end of a string
	- can specify what to trim with $characters=
- **explode($separator, $string)** Returns array of strings broken out from the original strings by a specified separator.
- **implode($separator, $array)/join()** Joins array of elements with a string
- **substr(string $string, int $offset, ?int $length = null)**: Returns part of a string specified by offset (start position) and length parameters.
	- Negative offset starts from the end of the array
- **count()** Counts all elements in an array
- **array_push()** appends variables onto the end of an array 
- **array_rand($array, $num=)** — Pick one or more random keys out of an array
	- specifies number of entries to be picked
- **array_reverse()** — Return an array with elements in reverse order
	- use argument $preserve-keys=true to preserve numeric keys
- **array_slice()** returns the sequence of elements from the array array as specified by the offset and length parameters.
	- Negative offset starts from the end of the array
- **array_unique()** — Removes duplicate values from an array
- **date** — Returns a formatted date string
	- date(string $format, ?int $timestamp = null): string
- **mail($to, $subject, $message...)** Sends an email
	- Returns a boolean saying whether mail was successfully accepted for delivery


