<!DOCTYPE html>
<html lang="NL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Authors" content="Rainier G, Tycho S">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Cosmic energy</title>
    <link rel="website icon" type="png"
    href="images/favicon.png">
</head>
<body>
<?php
    require_once('Php\header.php');
    
    ?>
<!DOCTYPE html>
<html>
<head>
	<title>Artist Details</title>
	<style type="text/css">
		#popup {
			display: none;
			position: fixed;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			padding: 20px;
			background-color: #fff;
			border: 1px solid #000;
			box-shadow: 0px 0px 10px #000;
			z-index: 9999;
		}
	</style>
</head>
<body>
    <main>
	<form action="" method="post">
		<label for="artiest">Choose an artist:</label>
		<select name="artiest" id="artiest">
			<?php
				$servername = "localhost";
				$username = "username";
				$password = "password";
				$dbname = "database_name";
				$conn = new mysqli($servername, $username, $password, $dbname);

				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}

				$sql = "SELECT naam FROM artiesten";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						echo "<option value='" . $row["naam"] . "'>" . $row["naam"] . "</option>";
					}
				} else {
					echo "<option value=''>No artists found</option>";
				}

				$conn->close();
			?>
		</select>
		<input type="submit" name="submit" value="View Details">
	</form>

	<div id="popup">
		<a href="#" id="close">Close</a>
		<div id="details">
			<?php
				if (isset($_POST["submit"]) && isset($_POST["artiest"])) {
					$servername = "localhost";
					$username = "username";
					$password = "password";
					$dbname = "database_name";
					$conn = new mysqli($servername, $username, $password, $dbname);

					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					}

					$artiest = mysqli_real_escape_string($conn, $_POST["artiest"]);


					$sql = "SELECT * FROM artiesten WHERE naam='$artiest'";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
							echo "<h2>" . $row["naam"] . "</h2>";
							echo"<p><strong>Genre:</strong> " . $row["genre"] . "</p>";
                            echo "<p><strong>Albums:</strong></p>";
                            echo "<ul>";
                            $sql_albums = "SELECT * FROM albums WHERE artiest='$artiest'";
                            $result_albums = $conn->query($sql_albums);
                            if ($result_albums->num_rows > 0) {
                            while($row_albums = $result_albums->fetch_assoc()) {
                            echo "<li>" . $row_albums["titel"] . " (" . $row_albums["jaar"] . ")</li>";
                            }
                            } else {
                            echo "<li>No albums found</li>";
                            }
                            echo "</ul>";
                            }
                            } else {
                            echo "<p>No details found for selected artist</p>";
                            }
				$conn->close();
			}
		?>
	</div>
</div>

<script type="text/javascript">

	var popup = document.getElementById("popup");
	var close = document.getElementById("close");

	document.getElementById("artiest").addEventListener("change", function() {
		popup.style.display = "block";
	});

	close.addEventListener("click", function() {
		popup.style.display = "none";
	});
</script>
</main>
</body>
</html>
        <footer>
     
    </footer>
</body>
</html>