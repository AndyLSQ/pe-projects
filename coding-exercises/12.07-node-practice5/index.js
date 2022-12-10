
import fileSystem from 'fs';

fileSystem.readdir('css', function(error, files) {
	if (error) return console.log('error', error);

	var cssContent = ""

	files.forEach((file) => {
		console.log(file);
		if (file == "styles-minified.css"){
			return
		}

		cssContent += fileSystem.readFileSync(`./css/${file}` , {encoding: 'utf8' }) + '\n';
		// console.log(currentFileContent)
	})

	fileSystem.writeFileSync('./css/styles-minified.css', cssContent)
})





// const _ = require('lodash');

// const exampleArray = [1,2,3,4,5]
// const reversed = _.reverse(exampleArray);
// console.log(reversed);

