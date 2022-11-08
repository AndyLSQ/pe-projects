console.log('test app.js');

import { taskListClass } from './list.js'

var testTaskList = new taskListClass("Tonight");
// taskList.add ("Go to store");

export {
	testTaskList
}