// Web Prog hw 2 
// Guess Age Java Script file
// Chen Huang
// 


alert("Let's start guessing your age! :D ");

BS(0,150,0);

//the function does binary search algorithm
function BS (min, max, count){
//do midpoint
	count++;
	//ask if user's age is the mid point
	var min = min;
	var max = max;
	var temp = parseInt((max+min)/2);
	var bol = confirm("Are you "+temp+" year-old ?" );
	//yes
	if(bol == true){
		alert("Your Age is "+temp+" !!!");
		//alert: tell how many times it used to have a right guess
		alert("It took "+ count +" times of guessing to find your age right.");
		document.write("<p> Game Ended, Thanks!</p>");
		document.write("<p> You are <strong>"+temp+"</strong> year-old! </p>");
		document.write("<p> Total Guesses: <strong>"+count+"</strong> </p>");

	}
	//no, call this function again
	//younger
	else{
		var younger = confirm("Are you younger than "+ temp +" ?");
		if (younger == true){
			//min doesn't change
			max = temp - 1;
			BS(min, max, count);
			}
	//case 2: is midpoint to 150? larger than midpoint?
	//max doesn't change
		else{
			min = temp + 1;
			BS(min, max, count);
		}
	}
}



