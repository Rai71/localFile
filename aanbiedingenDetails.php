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
    <main id="details">
    <?php
try{
    $conn = new mysqli("localhost", "root", "", "energy");
}catch(Exception $e){
    echo $e->getMessage();
}

    $id = $_GET['id'];

    $sql = "SELECT * FROM aanbiedingen WHERE aanbiedingen_id = $id"; 
    $result = $conn -> query($sql);
    $sale = $result->fetch_object();
    ?>  <article id="Details">
        <p>
    <?php echo $sale->titel;?>
        </p>
        <p>
    <?php echo $sale->begindatum;?>
        </p>
        <p>
    <?php echo $sale->einddatum;?>
        </p>
        <p>
    <?php echo $sale->omschrijving;?>
        </p>
        <a href="aanbiedingenOverzicht.php">Terug naar overzicht</a>
        </article>
        
    <?php
    $result->close();

$conn -> close();
?>
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