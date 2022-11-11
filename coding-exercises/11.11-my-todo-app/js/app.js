console.log("app.js connected")

import TaskList from './list.js';

var newTaskList = new TaskList("TEST LIST");

export default {
	newTaskList
}