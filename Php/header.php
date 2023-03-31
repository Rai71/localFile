<link rel="stylesheet" type="text/css" href="css/style.css">
<header>
        <article>
            <a href="index.php"><img class="logo-item" src="images/logoWslogan.png"></a>
        </article>
        <article>
            <ul>
                <li id="navbarHome"><a href="index.php">Home</a></li>
                <li id="navbarEvent">
                    <a href="#">Event</a>
                    <ul class="dropdown">
                        <li><a href="eventOverzicht.php">Event overzicht</a></li>
                        <li><a href="eventDetails.php">Event details</a></li>
                    </ul>
                </li>
                <li id="navbarArtiesten">
                    <a href="#">Artiesten</a>
                    <ul class="dropdown">
                        <li><a href="artiestenOverzicht.php">Artiesten overzicht</a></li>
                        <li><a href="eventDetails.php">Artiesten details</a></li>
                    </ul>
                </li>
                <li id="navbarAanbiedingen">
                    <a href="#">Aanbiedingen</a>
                    <ul class="dropdown">
                        <li><a href="aanbiedingenOverzicht.php">Aanbiedingen overzicht</a></li>
                        <li><a href="aanbiedingenDetails.php">Aanbiedingen details</a></li>
                    </ul>
                </li>
                <li id="navbarContact"><a href="contact.php">Contact</a></li>
                <li id="navbarOverig">
                    <a href="#">Overig</a>
                    <ul class="dropdown">
                        <li><a href="inlogAdmin.php">inloggen</a></li>
                        <li><a href="productInfo.php">Product info</a></li>
                    </ul>
                </li>
                <li>
                    <?php session_start(); 
                    if(isset($_SESSION["username"])){
                    ?><a  href="Php\adminCheck.php"> <?php echo $_SESSION["username"];?></a><?php
                        }
                     ?> 
                 </li>
            </ul>
        </article>
    </header>