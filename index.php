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
        <section>
            <h1>
                Welkom bij Cosmic Energy Drink
            </h1>
        </section>
        <section class="containerSlideShow">
            <section>
                <p id="titel">HUIDIGE AANBIEDINGEN</p>
            </section>
            <section class="slider-wrapper">
                <section class="slider">
                    <img id="slide-1" class="slides" src="images\RegularSale.png" alt="Regular Sale">
                    <img id="slide-2" class="slides" src="images\BlackberrySale.png" alt="Blackberry Sale">
                    <img id="slide-3" class="slides" src="images\ZeroSale.png" alt="Zero Sale">
                </section>
                <section class="slider-nav">
                    <a href="#slide-1"></a>
                    <a href="#slide-2"></a>
                    <a href="#slide-3"></a>
                </section>
            </section>
        </section>
        <section id="tekstHomepage">
            <p>
                Onze unieke formule is ontworpen om je een explosieve energieboost te geven, zonder de crash die vaak gepaard gaat met andere energiedranken. Met een combinatie van cafeïne, taurine, B-vitaminen en andere natuurlijke ingrediënten, is Cosmic Energy Drink de perfecte keuze voor iedereen die een snelle, betrouwbare en langdurige energieboost nodig heeft.
                Of je nu een atleet bent die een extra randje nodig heeft voor een training, een student die laat werkt aan een project of gewoon iemand die een extra energieboost nodig heeft om door de dag te komen, Cosmic Energy Drink zal je niet teleurstellen. En met de heerlijke smaak van onze dranken, zul je zeker terug blijven komen voor meer!
            </p>
            <p>Maar het gaat niet alleen om de smaak en de energieboost - we zijn ook toegewijd aan het creëren van een betere toekomst voor onze planeet. Cosmic Energy Drink wordt geproduceerd met duurzame en verantwoorde productiemethoden en onze verpakkingen zijn volledig recyclebaar.</p>
        </section>
    </main>



 <footer>
   
    <section>
        <article>
            <h1 id="ft"> Volg onze socials!</h1>
        </article>

            <article class="socials">
                <a href="#"><img src="images/instagram.png" alt="insta"></a>
                <a href="#"><img src="images/tiktok.png" alt="tiktok"></a>
                <a href="#"><img src="images/twitter.png" alt="twitter"></a>
                <a href="#"><img src="images/youtube.png" alt="youtube"></a>
            </article>

            <article>
                <p class="footertext">Mail ons: cosmicenergy@gmail.com</p>
                <p class="footertext">Neem contact op met ons: 0683108455</p>
                <p>[Copyrightshit]</p>
            </article>
            <style>
                footer{
        width: 100%;
        height: 500px;
        background-color: rgba(137, 129, 129, 0.402);
        display: flex;
        justify-content: center;
        text-align: center;
                }

#socials, img{
    width: 40px;
    height: 40px;
}
#ft {
    font-size: 35px;
}

footer, h1, p {
    font-size: 27px;
    color: white;
}


            </style>
    </section>
</footer>
    <script src="main.js" defer></script>
</body>

</html>