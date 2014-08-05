<!DOCTYPE html>
<html>
        <head>
                <meta charset="UTF-8">
                <link rel="stylesheet" type="text/css" href="http://www.jackhowardrealty.com/assets/style_edit.css" />
                <title>Howard Realty - Edit DB</title>
        </head>
        <body>
                <div id="header"> </div>

                <div id="container" >

                        <div id="content">
                                <h2>Edit database</h2>
	
				<h3>Edit entry:</h3>	
				<form method="post" action="edit.php" enctype="multipart/form-data">
					id: <input type="text" name="id" /><br />
					address: <input type="text" name="address" /> <br />
					price: <input type="text" name="price" /> <br />
					security deposit: <input type="text" name="deposit" /> <br />
					vacant: <select name="vacancy">
					<option value=""></option>
					<option value="yes">yes</option>
					<option value="no">no</option>
					</select> <br />
					apartment: <select name="apartment">
					<option value=""></option>
					<option value="no">no</option>
					<option value="yes">yes</option>
					</select> <br />
					beds: <select name="beds">
					<option value=""></option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="eff">eff</option>
					</select> <br />
					full baths: <select name="full">
					<option value=""></option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					</select> <br />
					half baths: <select name="half">
					<option value=""></option>
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					</select> <br />
					heating: <select name="heating">
					<option value=""></option>
					<option value="gas">gas</option>
					<option value="electric">electric</option>
					<option value="electric baseboard">baseboard</option>
					<option value="none">none</option>
					</select> <br />
					cooling: <select name="cooling">
					<option value=""></option>
					<option value="central">central</option>
					<option value="none">none</option>
					</select> <br />
					washer/dryer hookup: <select name="washer">
					<option value=""></option>
					<option value="yes">yes</option>
					<option value="no">no</option>
					<option value="laundry room">laundry room</option>
					</select> <br />
					flooring: <select name="hardwood">
					<option value=""></option>
					<option value="hardwood">hardwood</option>
					<option value="carpet">carpet</option>
					<option value="hardwood/carpet">both</option>
					<option value="tile">tile</option>
					</select> <br />
					area: <input type="text" name="area" /> <br />
					elem: <input type="text" name="elem" /><br />
					middle: <input type="text" name="middle" /><br />
					high: <input type="text" name="high" /><br />
					img: <input type='file' name='img'><br />
					<br />
					<input type="submit" name="method" value="Add"/>
					<input type="submit" name="method" value="Edit"/>
				</form>
				
				
				<br />
				<h3>Delete entry:</h3>
				<form method="post" action="edit.php">
					id: <input type="text" name="id" />
					<input type="submit" name="method" value="Delete" />
				</form>
				

				<br /><br />
				<form action"edit.php">
					<input type="submit" value="Refresh" />
				</form>

				<br />
				
				<?php
					$con = mysqli_connect("localhost", "jack", "Taylorerb1", "howard_realty_db");
					
					if (mysqli_connect_errno()) {
						echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}
					
					$result = mysqli_query($con, "SELECT * FROM rentals");

					if ($_SERVER["REQUEST_METHOD"] == "POST") {
						$method = $_POST['method'];

						$id = $_POST['id'];
						$address = $_POST['address'];
						$vacancy = $_POST['vacancy'];
						$price = $_POST['price'];
						$apartment = $_POST['apartment'];
						$beds = $_POST['beds'];
						$half = $_POST['half'];
						$full = $_POST['full'];
						$heating = $_POST['heating'];
						$cooling = $_POST['cooling'];
						$deposit = $_POST['deposit'];
						$elem = $_POST['elem'];
						$middle = $_POST['middle'];
						$high = $_POST['high'];
						$hardwood = $_POST['hardwood'];
						$washer = $_POST['washer'];
						$hardwood = $_POST['hardwood'];
						$area = $_POST['area'];

						$insert = "INSERT INTO rentals (id, address, vacancy, price, apartment, beds, full, half, heating, cooling, deposit, elem, middle, high, hardwood, washer, area) VALUES ('$id', '$address', '$vacancy', '$price', '$apartment', '$beds', '$full', '$half', '$heating', '$cooling', '$deposit', '$elem', '$middle', '$high', '$hardwood', '$washer', '$area')"; 
						
						$delete = "DELETE FROM rentals WHERE id='$id'";
						
						if ($method == "Add") {
							$count = "SELECT * FROM rentals WHERE id='$id'";
							$countResult = mysqli_query($con, $count);
							$countNum = mysqli_num_rows($countResult);
							
							if ($countNum == 0 && !mysqli_query($con, $insert)) {
								echo "ERROR: " . mysqli_error($con);
							}
						}
							
						if ($method == "Edit") {
							$edit = "UPDATE rentals SET";
							if ($address != "") {
								$edit = $edit . " address='$address',"; 
							}
							if ($vacancy != "") {
								$edit = $edit . " vacancy='$vacancy',"; 
							}
							if ($price != "") {
								$edit = $edit . " price='$price',"; 
							}
							if ($apartment != "") {
								$edit = $edit . " apartment='$apartment',"; 
							}
							if ($beds != "") {
								$edit = $edit . " beds='$beds',"; 
							}
							if ($full != "") {
								$edit = $edit . " full='$full',"; 
							}
							if ($half != "") {
								$edit = $edit . " half='$half',"; 
							}
							if ($heating != "") {
								$edit = $edit . " heating='$heating',"; 
							}
							if ($cooling != "") {
								$edit = $edit . " cooling='$cooling',"; 
							}
							if ($deposit != "") {
								$edit = $edit . " deposit='$deposit',"; 
							}
							if ($elem != "") {
								$edit = $edit . " elem='$elem',"; 
							}
							if ($middle != "") {
								$edit = $edit . " middle='$middle',"; 
							}
							if ($high != "") {
								$edit = $edit . " high='$high',"; 
							}
							if ($hardwood != "") {
								$edit = $edit . " hardwood='$hardwood',"; 
							}
							if ($washer != "") {
								$edit = $edit . " washer='$washer',"; 
							}
							if ($area != "") {
								$edit = $edit . " area='$area',"; 
							}
							
							if ($edit != "UPDATE rentals SET") {
								$edit = $edit . " id='$id' WHERE id='$id'";
							
								echo $edit;
							
								if (!mysqli_query($con, $edit)) {
									echo "ERROR: " . mysqli_error($con);
								}
							}
						}

						if ($method == "Delete" && !mysqli_query($con, $delete)) {
							echo "ERROR: " . mysqli_error($con);
						}

					}

					if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['id'] != "" && $_FILES['img'] != null) {
						if ($_FILES['img']['type'] == "image/jpeg" || $_FILES['img']['type'] == "image/jpg") {
							$path = "/home/kennethjhoward/www/assets/img/";
							$img = $path . $_POST['id'] . ".jpg";
							
						 	move_uploaded_file($_FILES['img']['tmp_name'], $img);
						}
					}

					echo "<table style='background-color:#AAAAFF;color:white'>
					<tr>
					<th>ID</th>
					<th>ADDRESS</th>
					<th>PRICE</th>
					<th>SECURITY DEPOSIT</th>
					<th>VACANCY</th>
					<th>APARTMENT</th>
					<th>BEDS</th>
					<th>FULL BATHS</th>
					<th>HALF BATHS</th>
					<th>HEATING</th>
					<th>COOLING</th>
					<th>WASHER/DRYER HOOKUP</th>
					<th>FLOORING</th>
					<th>AREA</th>
					<th>ELEMENTARY</th>
					<th>MIDDLE</th>
					<th>HIGH</th>
					</tr>";

					$i = 0;
					while ($row = mysqli_fetch_array($result)) {
						if ($i % 2 == 0)
							echo "<tr class='tr1'>";
						else
							echo "<tr class='tr2'>";
						echo "<td>" . $row["id"] . "</td>";
						echo "<td>" . $row["address"] . "</td>";
						echo "<td>" . $row["price"] . "</td>";
						echo "<td>" . $row["deposit"] . "</td>";
						echo "<td>" . $row["vacancy"] . "</td>";
						echo "<td>" . $row["apartment"] . "</td>";
						echo "<td>" . $row["beds"] . "</td>";
						echo "<td>" . $row["full"] . "</td>";
						echo "<td>" . $row["half"] . "</td>";
						echo "<td>" . $row["heating"] . "</td>";
						echo "<td>" . $row["cooling"] . "</td>";
						echo "<td>" . $row["washer"] . "</td>";
						echo "<td>" . $row["hardwood"] . "</td>";
						echo "<td>" . $row["area"] . "</td>";
						echo "<td>" . $row["elem"] . "</td>";
						echo "<td>" . $row["middle"] . "</td>";
						echo "<td>" . $row["high"] . "</td>";
						echo "</tr>";
						$i++;
					}
					echo "</table>";					
				?>
			</div>	
		</div>
        </body>
</html>
