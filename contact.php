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
        <section>
            <p class="fp">volg onze socials!</p>
            <article class="socialIconsFooter">
                <a href="contact.php"><img id="instagramIcon1" src="images\instagram.png" alt="instagram icon"></a>
                <a href="contact.php"><img id="tiktokIcon1" src="images\tiktok.png" alt="tiktok icon"></a>
                <a href="contact.php"><img id="twitterIcon1" src="images\twitter.png" alt="twitter icon"></a>
                <a href="contact.php"><img id="youtubeIcon1" src="images\youtube.png" alt="youtube icon"></a>
            </article>
            <p id="fp2">telefoon: 06 83108455</p>
            <p id="fp3">Mail ons: cosmicenergy@gmail.com</p>
        </section>
    </footer>
</body>
</html>