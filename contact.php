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
                <li><a href="home.html">Home</a></li>
                <li>
                    <a href="#">Event</a>
                    <ul class="dropdown">
                        <li><a href="eventOverzicht.html">Event overzicht</a></li>
                        <li><a href="eventDetails.html">Event details</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Artiesten</a>
                    <ul class="dropdown">
                        <li><a href="artiestenOverzicht.html">Artiesten overzicht</a></li>
                        <li><a href="eventDetails.html">Artiesten details</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Aanbiedingen</a>
                    <ul class="dropdown">
                        <li><a href="aanbiedingenOverzicht.html">Aanbiedingen overzicht</a></li>
                        <li><a href="aanbiedingenDetails.html">Aanbiedingen details</a></li>
                    </ul>
                </li>
                <li><a href="contact.php">Contact</a></li>
                <li>
                    <a href="#">Overig</a>
                    <ul class="dropdown">
                        <li><a href="inlogAdmin.html">inloggen</a></li>
                        <li><a href="productInfo.html">Product info</a></li>
                    </ul>
                </li>
            </ul>
        </article>
    </header>
    <main id="mainContact">
        <div class="container">
            <form action="Php/Contact_page.php">
          
              <label class="textLabel" for="fname">Voornaam</label>
              <input type="text" id="fname" name="firstname" placeholder="Jouw naam..">
          
              <label class="textLabel" for="lname">Achternaam</label>
              <input type="text" id="lname" name="lastname" placeholder="Jouw achternaam..">
          
              <label class="textLabel" for="country">Probleem</label>
              <select id="country" name="country">
                <option value="probleem">Product</option>
                <option value="foute bestelling">Foute bestelling</option>
                <option value="Events">Events</option>
                <option value="Anders">Anders</option>
              </select>
          
              <label class="textLabel" for="subject">Typ hieronder uw probleem uit.</label>
              <textarea id="subject" name="subject" placeholder="Typ uw probleem.." style="height:200px"></textarea>
          
              <input type="submit" value="Submit">
          
            </form>
          </div>
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
        <img id="line" src="images/vertical-line-icon-20.png" alt="">
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