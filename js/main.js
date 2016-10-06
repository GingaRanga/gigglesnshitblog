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