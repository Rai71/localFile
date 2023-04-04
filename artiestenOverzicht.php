<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "energy";

?>
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
    <header>
        <article>
            <a href="home.html"><img class="logo-item" src="images/logoWslogan.png"></a>
        </article>
        <article>
            <ul>
                <li id="navbarHome"><a href="home.html">Home</a></li>
                <li id="navbarEvent">
                    <a href="#">Event</a>
                    <ul class="dropdown">
                        <li><a href="eventOverzicht.html">Event overzicht</a></li>
                        <li><a href="eventDetails.html">Event details</a></li>
                    </ul>
                </li>
                <li id="navbarArtiesten">
                    <a href="#">Artiesten</a>
                    <ul class="dropdown">
                        <li><a href="artiestenOverzicht.html">Artiesten overzicht</a></li>
                        <li><a href="eventDetails.html">Artiesten details</a></li>
                    </ul>
                </li>
                <li id="navbarAanbiedingen">
                    <a href="#">Aanbiedingen</a>
                    <ul class="dropdown">
                        <li><a href="aanbiedingenOverzicht.html">Aanbiedingen overzicht</a></li>
                        <li><a href="aanbiedingenDetails.html">Aanbiedingen details</a></li>
                    </ul>
                </li>
                <li id="navbarContact"><a href="contact.php">Contact</a></li>
                <li id="navbarOverig">
                    <a href="#">Overig</a>
                    <ul class="dropdown">
                        <li><a href="inlogAdmin.html">inloggen</a></li>
                        <li><a href="productInfo.html">Product info</a></li>
                    </ul>
                </li>
            </ul>
        </article>
    </header>
    <main>
        <?php
$host = 'localhost';
$user = 'username';
$pass = 'password';
$dbname = 'energy';

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM artiesten";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Naam</th><th>Achternaam</th><th>Voornaam</th><th>Tussenvoegsel</th><th>Statement</th><th>Telefoon</th><th>Actief</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['artiest_id'] . "</td>";
        echo "<td>" . $row['naam'] . "</td>";
        echo "<td>" . $row['achternaam'] . "</td>";
        echo "<td>" . $row['voornaam'] . "</td>";
        echo "<td>" . $row['tussenvoegsel'] . "</td>";
        echo "<td>" . $row['statement'] . "</td>";
        echo "<td>" . $row['telefoon'] . "</td>";
        echo "<td>" . $row['actief'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No results found";
}

mysqli_close($conn);

        ?>

    </main>
    <footer>
        <section id="fs1">
            <div id="fs1d1">
                <p class="fp">Volg onze socials!</p>
            </div>
            <div id="fs1d2">
                <a href="#"><img src="images/instagram.png" alt=""></a>
                <a href="#"><img src="images/tiktok.png" alt=""></a>
                <a href="#"><img src="images/twitter.png" alt=""></a>
                <a href="#"><img src="images/youtube.png" alt=""></a>
            </div>
        </section>
        <section id="fs2">
            <div id="fs2d1">
                <article id="fs2a1">
                    <p class="footertext">Mail ons: cosmicenergy@gmail.com</p>
                </article>
                <article id="fs2a2">
                    <p class="footertext">Neem contact op met ons: 0683108455</p>
                </article>
            </div>
        </section>
    </footer>
</body>
</html>