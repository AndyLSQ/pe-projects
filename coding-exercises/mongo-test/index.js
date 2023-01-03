import express from 'express';
import mongoose from 'mongoose';
mongoose.set('strictQuery', false);

const app = express();

async function mongoConnection() {
	const endpoint = 'mongodb+srv://andylsq:knet4gech!plex@ae-cluster.pgj6ylt.mongodb.net/monsters-app';
	await mongoose.connect(endpoint);
}
mongoConnection().catch(err => console.log(err));

const monsterSchema = new mongoose.Schema({
	name: String,
	color: String,
});
const Monster = mongoose.model('Monster', monsterSchema);


//MUST DESIGNATE AS ASYNC TO USE AWAIT
app.get('/', async function(req, res) {

	const monsters = await Monster.find();
	console.log(monsters)
	res.send(monsters)
});

// const bunchy = new Monster({name: "Bunchy", color: "purple"} );
//console.log(bunchy);
//bunchy.save();


app.get('/create/:name', function(req, res) {

	const monster = new Monster({name: req.params.name, color: undefined} );
	console.log(monster);
	monster.save();
	res.send('create test')
})


app.listen(1982);