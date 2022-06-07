# Forms in PHP/HTML

## Lesson Tasks
- [x] 1. Add perpetual-education, sheriffderek, and bdlowery as a contributors collaborators on your pe-projects so that we can leave notes for you.

- [x] 2. Make sure you all have a lesson-notes.md (markdown file) in the root of your pe-projects folder.

- [x] 3. Take any notes, questions from the lecture/videos and commit those (and share the link when you’re done)

- [x] 4. Watch this video: https://perpetual.education/resources/styling-forms-part-1/ and start thinking about form styling.

- [x] 5. You’ll be making a lot of forms for practice. So, how about we put them somewhere similar for everyone. /user/projects/efp 

- [ ] 6. Create an index page for the forms you have so far - that links to each form

- [ ] 7. Set things up so that the forms all pull from a single set of styles. Consider matching it to your personal site and using that - or having a forms page specific styling (there’s no reason to restyle the inputs on every page, right?)

- [ ] 8. How about 4 forms (in total) (and with normalized styles) (and tested). Use exercises from the EFP book.

- [x] 9. Get together with another student - and take turns walking through 2 of your forms.

- [ ] 10. Try and add one thing to the https://github.com/perpetual-education/audiophile-data


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
			-	`<input type="text or number" name="num1" min="1" max="10">`
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
		 `input {`  
	    `writing-mode: horizontal-tb !important;`  
	    *`font-style: ;`  
	    `font-variant-ligatures: ;`  
	    `font-variant-caps: ;`  
	    `font-variant-numeric: ;`  
	    `font-variant-east-asian: ;` 
	    `font-weight: ;` 
	    `font-stretch: ;` 
	    `font-size: ;`  
	    `font-family: ;`  
	    `text-rendering: auto;`  
	    `color: fieldtext;`  
	    `letter-spacing: normal;`  
	    `word-spacing: normal;`  
	    `line-height: normal;`  
	    `text-transform: none;`  
	    `text-indent: 0px;`  
	    `text-shadow: none;`  
	    *`display: inline-block;`  
	    `text-align: start;`  
	    `appearance: auto;`  
	    `-webkit-rtl-ordering: logical;`  
	    `cursor: text;`  
	    `background-color: field;`  
	    *`margin: 0em;`  
	    *`padding: 1px 2px;`  
	    *`border-width: 2px;`  
	    `border-style: inset;`  
	    `border-color: -internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133));`  
	    `border-image: initial;`  
`}`