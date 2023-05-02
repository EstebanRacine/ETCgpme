<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="CSS/produit.css">
    <link rel="shortcut icon" href="images/logoETC.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Nos Produits</title>
</head>
<body>
<div class="container">
    <?php
    include "fichiersCommuns/header.php";
    ?>

    <div class="contenuProduits">
        <h1>Découvrez notre boite range câble et prise !</h1>
        <div class="infosProd">
            <div class="imagesProd">
                <img id="imgActive" src="images/produits/prod1.jpg" alt="Image principal du produit">
                <div class="gridSelectionImg">
                    <img class="miniPhotoActive" id="im1" onclick="document.getElementById('imgActive').src = 'images/produits/prod1.jpg'; img1()" src="images/produits/prod1.jpg" alt="Range cable avec boite">
                    <img class="miniPhoto" id="im2" onclick="document.getElementById('imgActive').src = 'images/produits/prod2.jpg'; img2()" src="images/produits/prod2.jpg" alt="Range cable vu sur le logo">
                    <img class="miniPhoto" id="im3" onclick="document.getElementById('imgActive').src = 'images/produits/prod3.jpg'; img3()" src="images/produits/prod3.jpg" alt="Range cable vu sur bloc de recharge">
                    <img class="miniPhoto" id="im4" onclick="document.getElementById('imgActive').src = 'images/produits/prod4.jpg'; img4()" src="images/produits/prod4.jpg" alt="Range cable en action">
                    <img class="miniPhoto" id="im5" onclick="document.getElementById('imgActive').src = 'images/produits/prod5.jpg'; img5()" src="images/produits/prod5.jpg" alt="PLusieurs range cable">
                </div>
            </div>
            <div class="descrProd">
                <p>
                    Nous vous présentons un produit innovant qui va vous permettre de ranger votre propre câble.
                    <br><br> Le range câble d'ETC vous donne la possibilité de transporter vos câbles
                    sans qu'ils ne risquent de s'abimer.<br><br> Il est facile d'utilisation et est
                    utilisable pour tout type d'appareil que ce soit Android ou Apple.<br><br>
                    Ce produit est recyclable et fait à partir de matières réutilisables,
                    écologiques telles que l’amidon de maïs. <br><br> Notre produit se distingue
                    de par son emballage qui est une boîte faite à partir de bois issu de
                    Haut-Doubs (local) provenant de l’entreprise Salvi (artisan sanglier) à
                    Vaux et Chantegrue. Cette boîte a pour fonctionnalité de renfermer le
                    produit pour le sécuriser.
                </p>
                <h2>Prix du produit : 10 €</h2>
                <h2>Prix avec son emballage : 11 €</h2>
                <a href="contact.php"><h2>Contactez nous pour réserver !</h2></a>
            </div>
        </div>

        <div class="caracteristiques">
            <h1>Caractéristiques</h1>
            <div class="infosCarac">
                <h3> <i class="fa-solid fa-ruler-vertical"></i> Diamètre : 7.30 cm</h3>
                <h3> <i class="fa-sharp fa-solid fa-weight-hanging"></i> Poids : 65g</h3>
                <h3> <i class="fa-solid fa-plug"></i> Compatible avec les câbles d'un mètre maximum</h3>
                <h3> <i class="fa-solid fa-palette"></i> Coloris disponibles : </h3>
                <h3> <span class="rondCouleur bleu"></span>
                    <span class="rondCouleur orange"></span>
                    <span class="rondCouleur vert"></span>
                    <span class="rondCouleur violet"></span>
                    <span class="rondCouleur rouge"></span>
                </h3>
            </div>
            <img id="imageCarac" src="images/produits/imgCarac.jpg" alt="Image de décoration représentant plusieurs range cable">
        </div>

        <div class="emploi">
            <h1>Mode d'emploi</h1>
            <div class="modeEmploiUtil">
                <video src="videos/tuto.mp4" controls></video>
                <a class="btnModeEmploi" href="noticeETC.pdf" download=""> <i class="fa-solid fa-file-pdf"></i> Téléchargez la notice d'utilisation</a>
            </div>
        </div>


    </div>

    <?php
    include "fichiersCommuns/footer.php";
    ?>
    <script src="fichiersCommuns/jsImgProd.js"></script>
</div>
</body>
</html>