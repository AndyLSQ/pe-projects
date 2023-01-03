import express from 'express';

const app = express();


app.get('/', function(req, res) {
	res.send('Test SEND')
})

app.listen(1982);