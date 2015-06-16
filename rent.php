<!DOCTYPE html>
<html>
        <head>
                <meta charset="UTF-8">
               <link rel="stylesheet" type="text/css" href="assets/style_main.css" />
			   <link rel="stylesheet" type="text/css" href="assets/style_rent.css" />
                <title>Howard Realty - Rent</title>
        </head>
        <body>
		<?php
			$con = mysqli_connect("localhost", "jack", "Taylorerb1", "howard_realty_db");
		?>
	
		<div id="header"></div>
		
		<div class="container">
                        <div id="content">
                                <h1>Rent</h1>

				<div id="selector">
					<span id="col2">
						<a class="button" id="all"  href="rent.php?filter=all">
							All<span class="shadow"></span>
						</a>
						<a class="button" id="houses"  href="rent.php?filter=houses">
							Houses<span class="shadow"></span>
						</a>
						<a class="button" id="apartments" href="rent.php?filter=apartments">
							Apartments<span class="shadow"></span>
						</a>
					</span>
				</div>
	
				<?php
					$filter = $_GET['filter'];
					echo "<script>document.getElementById('$filter').className = 'buttonSelected';</script>";
				?>

				<br />

				<?php
					$result = mysqli_query($con, "SELECT * FROM rentals");

					while ($row = mysqli_fetch_array($result)) {
						display_item($row);
					}


					function display_item($row) {
						if ($row['vacancy'] == 'no') return;
						if ($_GET['filter'] == "houses" && $row['apartment'] == "yes") return;
						if ($_GET['filter'] == "apartments" && $row['apartment'] == "no") return;

						echo "<hr /><span class='item'>
							<a href='item.php?id=" . $row['id'] . "'>";
							
						$img_path = '/home/kennethjhoward/www/assets/img/' . $row['id'] . '.jpg';
					
						if (file_exists($img_path) == true) {
							echo "<img src='http://www.jackhowardrealty.com/assets/img/" . $row['id'] . ".jpg' alt='rental image' />";
						} else {
							echo "<img src='http://www.jackhowardrealty.com/assets/img/default.jpg' alt='rental image' />";
						}
							
						echo "</a>
							<span id='info'>
								<h2 id='address'>" . $row['address'] . "</h2>
								<span id='price'>$" . $row['price'] . "</span><span class='text'>/month</span><br /><br />
								<span id='beds'>" . $row['beds'] . "</span>
								<span class='text'> bed </span><br />
								<span id='baths'>" . $row['full'] . "</span>
								<span class='text'> full</span>";

						if ($row['half'] > 0) {
							echo "<span id='baths'>, " . $row['half'] . "</span><span class='text'> half</span>";
						}

						echo " bath <br /><br /><br />
								<a class='button' href='item.php?id=" . $row['id'] . "'>View More<span class='shadow'></span></a>
							</span>
							</span>";
					}
				?>
		
				<div class="clear"></div>	
			</div>	
		</div>

		<div id="footer"></div>

		<script src="assets/script.js"></script>
		<script>setRentActive();</script>	
        </body>
</html>
