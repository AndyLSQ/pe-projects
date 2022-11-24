console.clear();

//2 - OK


//1 - OK
new Vue ({
	el: "#app1",
	
	data() {
		return {
		name: "",
		message: "",
		outputStyle: "",
		processorSwitch: false,
		// activeProcessor: ""
		}
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
		// checkProcessor() {
		// 	if (this.processorSwitch) {
		// 		this.activeProcessor = "vue";
		// 	} else {
		// 		this.activeProcessor = "php";
		// 	}

		// 	return this.activeProcessor;
		// },
		checkInput() {
			return this.message;
		},

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

// var $toggleSwitch = document.querySelector(processorSwitch01)

