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
    <main>
    <?php
try{
    $conn = new mysqli("localhost", "root", "", "energy");
}catch(Exception $e){
    echo $e->getMessage();
}

if(isset($_GET["aanbiedingen_id"])){
    $sql = "SELECT * FROM aanbiedingen WHERE aanbiedingen_id = ".$_GET["aanbiedingen_id"];
    $result = $conn -> query($sql);
    $user = $result->fetch_row();
    ?>
        <article id="Details">
    <?php echo $user->titel . " - " . $user->begindatum . " - " . $user->einddatum . " - " . $user->omschrijving;?>
        </article>
    <?php
    $result->close();
}
$conn -> close();
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