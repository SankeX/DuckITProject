var stringArray = new Array()
	stringArray[0] = "<h3 class='title'>This Project Sucks</h3>";
	stringArray[1] = "<h3 class='title'>This Project Rocks</h3>";
	stringArray[2] = "<h3 class='title'>This is a test</h3>";
	stringArray[3] = "<h3 class='title'>I detest you all.</h3>";
	stringArray[4] = "<h3 class='title'>JavaScript is Awesome</h3>";
	stringArray[5] = "<h3 class='title'>testArray5</h3>";
	stringArray[6] = "<h3 class='title'>This is a randomly selected string</h3>";
	stringArray[7] = "<h3 class='title'>testArray7</h3>";
	stringArray[8] = "<h3 class='title'>Quotes! So Many quotes!</h3>";
var string = stringArray.length;
var randString = Math.round(Math.random()*(string-1));
function showString(){document.write(stringArray[randString]);}
	showString();