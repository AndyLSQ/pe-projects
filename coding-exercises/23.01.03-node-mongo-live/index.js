import express from 'express';
import * as dotenv from 'dotenv'
dotenv.config()
import mongoose from 'mongoose';
mongoose.set('strictQuery', false);

const app = express();

//REQUIRED TO READ req.body
app.use(express.json());
app.use(express.urlencoded({ extended: true }));

mongoConnect().catch(err => console.log(err));

async function mongoConnect() {
  await mongoose.connect(`mongodb+srv://andylsq:${process.env.MONGO_PW}@ae-cluster.pgj6ylt.mongodb.net/baseball-app`);
}

const baseballSchema = new mongoose.Schema({
	name: String,
	number: Number,
	position: String
});

const Player = mongoose.model('Player', baseballSchema);

// (??) better way to get nav?
const nav = `
	<nav>
		<a href="/">Read</a>
		<a href="/create">Create</a>
	</nav>`;

//test addition
	// const player41 = new Player({name: "Chris Sale", number: 41, position: "p"})
	// console.log(player41)
	// await player41.save();

// CREATE
app.get('/create', async function(req, res) {
	const form = `
		<form action="/create" method="post">
			<field>
				<label>name</label>
				<input type="text" name="name" />
			</field>
			<field>
				<label>number</label>
				<input type="number" name="number" />
			</field>
			<field>
				<label>position</label>
				<input type="text" name="position" />
			</field>
			<button type="submit">Submit</button>
		</form>`

	const page = nav + form;
	res.send(page);
})

app.post('/create', async function(req, res){
	console.log('req.body: ', req.body)
	const player = new Player ({
		name: req.body.name,
		number: req.body.number,
		position: req.body.position
	})
	await player.save();

	let confirmation = `<p>New player ${req.body.name} added.</p>`

	const page = nav + confirmation;
	res.send(page);
})

// READ
app.get('/', async function(req, res) {
	const players = await Player.find()
	let playerList =  `<h1>Player List</h1>
		<ul>`
	players.forEach( function(player) {
		playerList += `
		<li>
			<p><strong>Name:</strong> ${player.name}</p>
			<p><strong>Number:</strong> ${player.number}</p>
			<p><strong>Position:</strong> ${player.position}</p>
			<p><a href="/update/${player.name}">Update</a> <a href="/delete/${player.name}">Delete</a></p>
		</li>`
	})
	playerList += `</ul>`;

	const page = nav + playerList;
	res.send(page);
})

// UPDATE
// (??) how to use a UID here??
app.get('/update/:name', async function(req, res) {

	const currentPlayer = await Player.findOne({name: req.params.name});

	// currentPlayer.number

	const form = `
		<h1>Update player info for ${currentPlayer.name}</h1>
		<form action="/update/${req.params.name}" method="post">
			<field>
				<label>name</label>
				<input type="text" name="name" value="${currentPlayer.name}" required/>
			</field>
			<field>
				<label>number</label>
				<input type="number" name="number" value="${currentPlayer.number}" required/>
			</field>
			<field>
				<label>position</label>
				<input type="text" name="position" value="${currentPlayer.position}" required/>
			</field>
			<button type="submit">Submit</button>
		</form>`

	const page = nav + form;
	res.send(page);
})

// (??) better to bounce back to the home page or display a confirmation page? or popop message?
app.post('/update/:name', async function(req, res) {
	console.log("body: ", req.body)
	await Player.updateOne({name: req.params.name}, req.body);
	// console.log(result.matchedCount)
	res.redirect("/");
})


// DELETE
// (??) Need to add error handling to update and delete?
app.get('/delete/:name', async function(req, res) {
	await Player.deleteOne({name: req.params.name});
	res.redirect('/');
})

// API Testing
app.get('/api/v1/players', async function(req, res) {
	const players = await Player.find();
	res.send(players)
})

app.listen(1982);