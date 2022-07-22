# Layout Walkthrough Notes

- Approach
	- Sketch out sections by drawing boxes around different elements

- File setup
	- folder for each module
		- contains index.php and style.css for each module
	- separate folder for stylesheets
	- index lives in the main directory

- Styling
	- Typography- use voices
	- Use unique tags and classes e.g.: `media-overview` tag for the page, `writing` and `image` classes for the 2 main sections
	- Put different color borders around different sections
	- Use `grid` for articles
		- **Important:** `grid-template-columns: 1fr 1fr;` breaks the element into 2 equal fractions (and uses the specified gap)
	- Troubleshooting why your styles aren't applying as expected can be tricky
		- Check inspector to see what lines are actually being applied if the property you want is getting crossed out.
		- Something else somewhere may be overriding it and you have to figure out what
	- Getting image grid to space itself properly- try `align-self`
		- Might be better to align image grid to article grid
		- Tried getting rid of parent zone
	- More on grids
		- inspector shows numbers on both axes
			- columns across, rows up and down
			- **Flexbox- 1 dimension**
			- **Grid- 2 dimension**
		- Can specify how many columns & rows you want each element to take up
			- Syntax is
				- `grid-column: (start position) / (end-position)`
				- `grid-column: (start position) / (end-position) `

- Posting to Github
	- You can unstage unnecessary chunks

- Focus on getting the layout correct first for less rewriting