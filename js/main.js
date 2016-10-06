// EXAMPLE 1
//var myHeading = document.querySelector('h1');
//myHeading.textContent = 'Hello world!';

/*NOTES: 
	VARIABLES are containers that you can store values in. You start by declaring a variable with the var keyword, followed by any name you want to call it.
	
	An OPERATOR is a mathematical symbol that produces a result based on two values (or variables). 
	
	CONDITIONALS are code structures that allow you to test whether an expression returns true or not, and then run different code depending on the result. The most common form of conditional is called if ... else.
	
	FUNCTIONS are a way of packaging functionality that you want to reuse, so that whenever you want the functionality you can call the function with the function name rather than constantly rewriting the entire code. If you see something that looks like a variable name, but has brackets — () — after it, it is probably a function. Functions often take arguments — bits of data they need to do their job. These go inside the brackets, separated by commas if there is more than one item.
	
	To create real interactivity on a website, you need EVENTS — these are code structures that listen out for things happening to the browser, and then allow you to run code in response to those things. The most obvious example is the click event, which is fired by the browser when the mouse clicks on something.
*/

//EXAMPLE 2
var myImage = document.querySelector('img');

myImage.onclick = function() {
    var mySrc = myImage.getAttribute('src');
    if(mySrc === '../img/firefox-icon.png') {
      myImage.setAttribute ('src','../img/chrome-icon.png');
    } else {
      myImage.setAttribute ('src','../img/firefox-icon.png');
    }
};
/* 
	We retrieve the value of the image's src attribute.
	We use a conditional to check whether the src value is equal to the path to the original image:
	If it is, we change the src value to the path to the 2nd image, forcing the other image to be loaded inside the <image> element.
	If it isn't (meaning it must already have changed), we change the src value back to the original image path, to flip it back to how it was originally.
*/

//EXAMPLE 3
var myButton = document.querySelector('button');
var myHeading = document.querySelector('h1');

function setUserName() {
  var myName = prompt('Please enter your name.');
  localStorage.setItem('name', myName);
  myHeading.innerHTML = 'Mozilla is cool, ' + myName;
}

if(!localStorage.getItem('name')) {
  setUserName();
} else {
  var storedName = localStorage.getItem('name');
  myHeading.innerHTML = 'Mozilla is cool, ' + storedName;
}

myButton.onclick = function() {
  setUserName();
};
/*
	This function contains a prompt() function, which brings up a dialog box, a bit like alert() except that prompt() asks the user to enter some data, and stores that data in a variable after the user presses OK. In this case, we are asking the user to enter their name. Next, we call on an API called localStorage, which allows us to store data in the browser and retrieve it later on. We use localStorage's setItem() function to create and store a data item called 'name', and set its value to the myName variable that contains the name the user entered. Finally, we set the textContent of the heading to a string, plus the user's name.
	This block first uses the negation operator (logical NOT) to check whether the name data item exists. If not, the setUserName() function is run to create it. If so (that is, the user set it during a previous visit), we retrieve the stored name using getItem() and set the textContent of the heading to a string, plus the user's name, the same as we did inside setUserName().
	Finally, put the below onclick event handler on the button, so that when clicked the setUserName() function is run. This allows the user to set a new name whenever they want by pressing the button
*/

/*I.E.
	var para = document.querySelector('p');

	para.addEventListener('click', updateName);

	function updateName() {
	  var name = prompt('Enter a new name');
	  para.textContent = 'Player 1: ' + name;
	}
	Here we are selecting a text paragraph (line 1), then attaching an event listener to it (line 3) so that when the paragraph is clicked, the updateName() code block (lines 5–8) is run. The updateName() code block (these types of reusable code block are called "functions") asks the user for a new name, and then inserts that name into the paragraph to update the display.
*/

/*
	Server-side code on the other hand is run on the server, then its results are downloaded and displayed in the browser. Examples of popular server-side web languages include PHP, Python, Ruby, and ASP.NET. And JavaScript! JavaScript can also be used as a server-side language, for example in the popular Node.js environment
*/	