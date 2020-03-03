window.onload = rolloverInit;

function rolloverInit() {
	for (var i=0; i<document.images.length; i++) {
		if (document.images[i].parentNode.tagName == "A") {
			setupRollover(document.images[i]);
		}
	}
}

function setupRollover(thisImage) {
	thisImage.outImage = new Image();
	thisImage.outImage.src = thisImage.src;
	thisImage.onmouseout = rollOut;

	thisImage.clickImage = new Image();
	thisImage.clickImage.src = "buttons/" + thisImage.id + "2.gif";
	thisImage.onclick = rollClick;	

	thisImage.overImage = new Image();
	thisImage.overImage.src = "buttons/" + thisImage.id + "3.gif";
	thisImage.onmouseover = rollOver;	
}

function rollOver() {
	this.src = this.overImage.src;
}

function rollOut() {
	this.src = this.outImage.src;
}

function rollClick() {
	this.src = this.clickImage.src;
}

						

