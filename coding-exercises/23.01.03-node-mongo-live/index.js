import express from 'express';
import mongoose from 'mongoose';
mongoose.set('strictQuery', false);

const app = express();

//REQUIRED TO READ req.body
app.use(express.json());
app.use(express.urlencoded({ extended: true }));

mongoConnect().catch(err => console.log(err));

async function mongoConnect() {
  await mongoose.connect('mongodb+srv://andylsq:knet4gech!plex@ae-cluster.pgj6ylt.mongodb.net/baseball-app');
}

const baseballSchema = new mongoose.Schema({
	name: String,
	number: Number,
	position: String
})

const Player = mongoose.model('Player', baseballSchema);

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
	</form>
	`

	const page = nav + form
	res.send(page);
})

app.post('/create', async function(req, res){
	console.log('req.body: ', req.body)
	const player = new Player ({
		name: req.body.name,
		number: req.body.number,
		position: req.body.position
	})
	await player.save()

	let confirmation = `<p>New player ${req.body.name} added.</p>`

	const page = nav + confirmation
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
		</li>`
	})
	playerList += `</ul>`

	const page = nav + playerList
	res.send(page)
})

// UPDATE - switch this to number??
app.get('/update/:name', async function(req, res) {

	Player.updateOne({})
})

app.listen(1982);