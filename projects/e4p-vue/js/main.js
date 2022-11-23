console.clear();

//2 - OK
new Vue ({
	el: "#app2",
	
	data: {
		inputString: "",
		characterCount: "0",
		outputStyle: ""
	},
	
	methods: {},
				 
	computed: {
		checkInput() {
			return this.inputString;
		},
		message() {
			if (this.inputString){
				this.outputStyle = 'valid'
				return `${this.inputString} contains ${this.inputString.length} characters.`
			} else {
				this.outputStyle = 'invalid'
				return `nope`
			}
		}
	}		 
});

//1 - OK
new Vue ({
	el: "#app1",
	
	data: {
		name: "",
		message: "",
		outputStyle: ""
	},
	
	methods: {
		update() {
			if (this.name) {
				this.outputStyle = 'valid';
				this.message = `Hello, ${this.name}, nice to meet you!`;
			} else {
				this.outputStyle = 'invalid';
				this.message = `Please enter your name.`;
			}
		}
	},
	
	computed: {
		checkInput() {
			return this.message;
		}
	},

	watch: {
		name(newValue, oldValue) {
			if (newValue != oldValue) {
				this.message = "";
			}
		}
	}
	
});

// new Vue ({
// 	el: "#ps01",

// 	data() {
// 		return {
// 			processorSwitch: false,
// 			activeProcessor: ""
// 		}
// 	},

// 	methods: {

// 	},

// 	computed: {
// 		checkProcessor() {
// 			if (this.processorSwitch) {
// 				this.activeProcessor = "vue";
// 			} else {
// 				this.activeProcessor = "php";
// 			}

// 			return this.activeProcessor;
// 		}
// 	}

// })