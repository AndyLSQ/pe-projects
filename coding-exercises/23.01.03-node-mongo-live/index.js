import express from 'express';
import mongoose from 'mongoose';
mongoose.set('strictQuery', false);

const app = express();

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

	// const player41 = new Player({name: "Chris Sale", number: 41, position: "p"})
	// console.log(player41)
	// await player41.save();

app.get('/', async function(req, res) {
	res.send('Home page test SEND')
	const players = await Monster.find()
})

app.get('/create/:name', function(req, res){
	const player = new Player({name: req.params.name})
	console.log(player);
	player.save();
	res.send('create test')
})

app.listen(1982);