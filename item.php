<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="assets/style_main.css" />
		<link rel="stylesheet" type="text/css" href="assets/style_item.css" />
		<title>Howard Realty - Rental</title>
	</head>
	<body>
		<div id="header"></div>

		<div class="container">
			<div id="content">
				<?php
					$con = mysqli_connect("localhost", "jack", "Taylorerb1", "howard_realty_db");
		
					if (mysqli_connect_errno()) {
						echo "Failed to connect to MySQL: " . mysqli_connect_error();
					} 

					if ($_SERVER["REQUEST_METHOD"] == "GET") {
						$id = $_GET['id'];
						$select = "SELECT * FROM rentals WHERE id='$id'";
						$result = mysqli_query($con, $select);
						$item = mysqli_fetch_array($result);

					}
				?>
				<h1 id="address"><?php echo $item['address'];?></h1>
				
				<?php 
					if ($item['vacancy'] == "yes") {
						echo "<p id='price'><span id='price' style='color:#008836;'>$" . $item['price'] . "</span>/month</p>";
					} else {
						echo "<p id='priceNV'>NOT AVAILABLE</p>";
					}
				?>


				<hr />

				<div id="col1">
					<?php
						$img_path = '/home/kennethjhoward/www/assets/img/' . $item['id'] . '.jpg';
					
						if (file_exists($img_path) == true) {
							echo "<img src='http://www.jackhowardrealty.com/assets/img/" . $item['id'] . ".jpg' alt='rental image' />";
						} else {
							echo "<img src='http://www.jackhowardrealty.com/assets/img/default.jpg' alt='rental image' />";
						}
					?>
				</div>

				<?php
					$key = "AIzaSyCXpRX_RYyJ4B9mZeFwoB1l0VeR0-9nujA";
					$url_address = urlencode($item['address']) . "high+point+nc";
					$gm_url = "https://www.google.com/maps/embed/v1/place?key=$key&q=$url_address";
				?>
				
				<div id="col2">
					<iframe src="<?php echo $gm_url;?>"></iframe>
				</div>

				<div class="clear"></div>
				
				<hr />

				<h2 style="margin-bottom:2px;">Details</h2>
				
				<div class="infoCol">
					<ul>
						<li>Price: $<?php echo $item['price'];?>/month</li>
						<li>Deposit: $<?php echo $item['deposit'];?></li>
						<li>1 Year Lease</li>
						<li>No Pets</li>
					</ul>
				</div>
				<div class="infoCol">
					<ul>
						<li>Beds: <?php echo $item['beds'];?></li>
						<li>Baths: <?php echo $item['full'] . " full";
								if ($item['half'] > 0)
									echo ", " . $item['half'] . " half";
							?>
							</li>
						<li>Heating: <?php echo $item['heating'];?></li>
						<li>Cooling: <?php echo $item['cooling'];?></li>
					</ul>
				</div>
				<div class="infoCol">
					<ul>
						<li>Wash/Dryer Hookup: <?php echo $item['washer'];?></li>
						<li>Flooring: <?php echo $item['hardwood'];?></li>
						<!--<li><?php echo $item['area'];?> sq feet</li>-->
					</ul>
				</div>

				<div class="clear"></div>

				<h2 style="margin-bottom:2px;">School District</h2>
				
				<div class="infoCol">
					<ul>
						<li>Elementary: <?php echo $item['elem'];?></li>
					</ul>
				</div>
				<div class="infoCol">
					<ul>
						<li>Middle: <?php echo $item['middle'];?></li>
					</ul>
				</div>
				<div class="infoCol">
					<ul>
						<li>High: <?php echo $item['high'];?></li>
					</ul>
				</div>

				<div class="clear"></div>



				<br />

				<div id="contact">
					<h2>To View This Property Or For More Information, Call:</h2>
					<h1>(336) 883-9602</h1>
				</div>
			</div>
		</div>

		<div id="footer"></div>		

		<script src="assets/script.js"></script>
		<script>setRentActive();</script>	
	</body>
</html>
