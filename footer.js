/* Credit to T. J. Crowder of Stack Overflow
 * for the javascript random text setup!
 * http://stackoverflow.com/questions/17632519/how-do-i-display-randomly-chosen-text-with-an-associated-image
 */

(function() {
      	var quotes = [
       		{
          		text: "Not affiliated with The Mushroom Kingdom",
          		img:  "images/footer/mushroom.png"
        	},
        	{
          		text: "Knowing the mouse might one day leave its hole and get the cheese... It fills you with determination",
          		img:  "images/footer/mouse-cheese.jpg",
        	},
        	{
<<<<<<< HEAD
          		text: "THAT'S THE GARBAGE CAN. FEEL FREE TO VISIT IT ANY TIME",
=======
          		text: "FEEL FREE TO VISIT IT ANY TIME",
>>>>>>> 856e7a99340974ae67bdfb6c70f70b1cba87cd8b
          		img:  "images/footer/trash.jpg",
        	}
      	];
      	var quote = quotes[Math.floor(Math.random() * quotes.length)];
      	document.getElementById("quote").innerHTML =
	'<img src="' + quote.img + '" style="float:left" width="10%">' +
        '<p>' + quote.text + '</p>';
})();
