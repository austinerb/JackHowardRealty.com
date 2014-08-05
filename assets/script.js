document.getElementById("header").innerHTML = "\
	<div id='headerTop'> \
		<a id='logoBG' href='http://www.jackhowardrealty.com/index.html'> \
			<img src='http://www.jackhowardrealty.com/assets/logo.png' alt='Howard Realty Logo' /> \
			<div class='shadow'></div> \
		</a> \
	</div> \
	<div id='navBG'> \
		<div id='nav'> \
			<a id='home' class='navLink' href='http://www.jackhowardrealty.com/index.html'>Home</a> \
			<a id='rent' class='navLink' href='http://www.jackhowardrealty.com/rent.php?filter=all'>Rent</a> \
			<a id='contact' class='navLink' href='http://www.jackhowardrealty.com/contact.php'>Contact</a> \
			<a id='about' class='navLink' href='http://www.jackhowardrealty.com/about.html'>About</a> \
			<div class='shadow'></div> \
		</div> \
	</div>";

document.getElementById("footer").innerHTML = "Website Design by <a href='http://www.austinerb.com' target='_blank' style='color:#313233;'>Austin Erb</a>  \
			<div class='shadow'></div>";

function setHomeActive() {
	document.getElementById("home").className = 'navLinkActive';
}

function setRentActive() {
	document.getElementById("rent").className = 'navLinkActive';
}

function setContactActive() {
	document.getElementById("contact").className = 'navLinkActive';
}

function setAboutActive() {
	document.getElementById("about").className = 'navLinkActive';
}

