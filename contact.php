<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="assets/style_main.css" />
		<link rel="stylesheet" type="text/css" href="assets/style_contact.css" />
		<title>Howard Realty - Contact</title>
	</head>
	<body>
		<div id="header"></div>

		<div class="container">
			<div id="content">
				<div id="col1">
					<div id="info">
						<h2>Phone</h2>

						<p style="color:#0E66BF">(336) 883-9602</p>
						<br />

						<h2>Mailing Address</h2>

						<p>
						PO Box 5733 <br />
						High Point, NC 27262
						</p>
						<br />

						<h2>Location</h2>
	
						<p>
						918 Ferndale Blvd <br />
						High Point, NC 27262
						</p>
					</div>
				</div>
		
				<?php
					$key = "AIzaSyCXpRX_RYyJ4B9mZeFwoB1l0VeR0-9nujA";
					$address = "918 Ferndale blvd, High point, NC 27262";
					$url_address = urlencode($address);
					$gm_url = "https://www.google.com/maps/embed/v1/place?key=$key&q=$url_address";
				?>
				
				<div id="col2">
					<iframe src="<?php echo $gm_url;?>"></iframe>
				</div>			
			</div>
		</div>
		
		<div id="footer"></div>

		<script src="assets/script.js"></script>
		<script>setContactActive();</script>	
	</body>
</html>
