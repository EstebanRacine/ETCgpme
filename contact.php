<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="CSS/contact.css">
    <link rel="shortcut icon" href="images/logoETC2.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Qui Sommes-Nous ?</title>
</head>
<body>
<div class="container">
    <?php
    include "fichiersCommuns/header.php";
    ?>

    <div class="contenuContact">

        <h1 class="TitreTel">Nous Contacter</h1>

        <img id="imageDecorContact" src="images/contact/imgContact.jpg" alt="Image">
        <div class="reseaux">
            <h2>Nos Réseaux</h2>
            <a href="https://www.instagram.com/etcgpme/" target="_blank"><i class="fa-brands fa-instagram"></i> @etcgpme </a>
            <a href="https://www.tiktok.com/@etcgpgme" target="_blank"><i class="fa-brands fa-tiktok"></i> @etcgpme</a>
            <a href="https://www.facebook.com/profile.php?id=100091503001565" target="_blank"><i class="fa-brands fa-facebook-f"></i> ETC GPME </a>
            <a target="_blank" href="https://fr.linkedin.com/in/etc-gpme-29004426a"><i class="fa-brands fa-linkedin-in"></i> ETC GPME </a>
        </div>
        <div class="blocAbsContact">
            <h1 class="titreContact">Nous Contacter</h1>
            <h1 class="TitreTel contactMail">Envoyez nous un email</h1>
            <a href="mailto:etc.gpme@gmail.com" onmouseover="document.getElementById('gifEnveloppe').src='images/contact/mail-mouv.gif'" onmouseout="document.getElementById('gifEnveloppe').src='images/contact/mail-static.png'"><img id="gifEnveloppe" src="images/contact/mail-static.png" alt="Image d'enveloppe" >etc.gpme@gmail.com</a>
        </div>
    </div>


    <?php
    include "fichiersCommuns/footer.php";
    ?>
</div>
</body>
</html>