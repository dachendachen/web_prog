/*
blackjack.js
 */

/*Part A. By checking a cookie, see if anyone has ever played this game of Blackjack on this machine. If not, ask for their name. If they have played before, greet them by name and tell them how many "Blackjacks" they have gotten in total so far. (Hint: Get this part to work after you have the other parts up and running!)
*/
//cookies

//cookie function checks whether a user's history
//
function checkCookie() {
	var input = document.getElementById("name");
	var name = input.value
  	var score = getCookie(name);
	console.log(name);
	console.log(score);

  	if (score != null) {
   		alert("Welcome Back " + name +" .");
		alert("Your total black Jack so far is "+ score +" .");
 	}
	else{
		alert("Enjoy your first game!");
	}
}

function getCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}


function setCookie(name, value) {
    var d = new Date;
    d.setTime(d.getTime() + 24*60*60*1000*30);
    document.cookie = name + "=" + value + ";path=/;expires=" + d.toGMTString();
}

//part B and C
function dealcards(){
		var counts = document.getElementById("count");
		var cards = ["2","3","4","5","6","7","8","9","10","11","12","13","14"];
		var first= document.getElementById("first");
		var second = document.getElementById("second");
		var i = parseInt(Math.random()*cards.length);
		var j = parseInt(Math.random()*cards.length);
	//randomly deal with card
		first.src= "src/"+cards[i]+"hearts.gif";
		second.src= "src/"+cards[j]+"hearts.gif";
		var total = display(cards[i],cards[j]);
		identical(cards[i],cards[j]);
		counts.value = parseInt(counts.value)+1;
		Blackjack(total);

		}

function display(card1, card2){
		//display the points
		var points1 = document.getElementById("points1");
		var points2 = document.getElementById("points2");
		var total = document.getElementById("total");
		//console.log(card2);
		if((card1 == 11) &&( card2 == 11)){
			//console.log(card1);
			points1.value = "1";
			points2.value = "11";
			total.value = "12";
		}
		else if((card1 > 11) && (card2 > 11)){
			points1.value = "10";
			points2.value = "10";
			total.value = "20";
		}
		else if(card1>11){ 
			points1.value = "10";
			points2.value = card2;
			total.value = 10+parseInt(card2);

		}
		else if (card2>11){
			points1.value =card1;
			points2.value = "10";
			total.value = parseInt(card1) + 10;

		}
		else{
		points1.value = card1;
		points2.value = card2;
		total.value = parseInt(card1)+parseInt(card2);
		}
		return parseInt(total.value);

	}

function identical(card1, card2){
		var idt = document.getElementById("identical");
		if(card1 == card2){
			idt.value = parseInt(idt.value)+1;
		}

	}

function Blackjack(total_points){
		if(total_points == 21){
			newWindow();

			//update the cookie information
			var input = document.getElementById("name");
			var name = input.value;
  			var score = getCookie(name);
			console.log(score);
			if(score == null){
				score = 0;
				score ++;
				setCookie(name,score);
			}
			else{
				setCookie(name,parseInt(score)+1);
			}
			console.log(name);
			console.log(score);
		//	console.log(document.cookie);
	
		}
		
	}
	

//function for openning the celebration window
function newWindow(){
		newwindow = window.open("celebratory.html","_blank");
	}

//function for closing the window
function closewindow(){
		if(newwindow && !newwindow.closed){
			newwindow.close();
			}
	}
	







