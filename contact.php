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
            <form action="Contact_page.php">
          
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
      
    </footer>
</body>
</html>