import http from 'node:http';
import fileSystem from 'fs';


const server = http.createServer( function(request, response) {
	const validPages = ['/','/home','/about','/contact'];
	response.setHeader('Content-Type', 'text/html');
	response.statusCode = 200;

	if (request.url != "/favicon.ico") {
		//handle home page
		var path = `pages${request.url}.html`;
		if ( request.url == '/' ) {
			path = 'pages/home.html'
		} 
		//handle invalid pages
		if (!validPages.includes(request.url)) {
			response.statusCode = 404;
			path = "pages/404.html";
		}
		//read & write the page
		fileSystem.readFile(path, 'utf8', function(error, dataRead){
			if(error) return console.log('error: ', error)
			response.write(dataRead);
			response.end()
		})
	}
});

const PORT = 1982;
const HOSTNAME = 'localhost'

server.listen(PORT, HOSTNAME, function() {
	console.log(`Server is running at http://localhost:${PORT}`)
})