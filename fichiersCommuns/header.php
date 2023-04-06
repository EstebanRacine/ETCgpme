<?php
$path = $_SERVER['PHP_SELF'];
$file = basename($path);

$contactClass = "";
$infosETCClass = "";
$produitsClass = "";

if ($file == "contact.php"){
    $contactClass = "underline";
}elseif ($file == "accueil.php"){
    $accueilClass = "underline";
}elseif ($file == "quiSommesNous.php"){
    $infosETCClass = "underline";
}elseif ($file == "produits.php"){
    $produitsClass = "underline";
}


?>



<header>
    <a href="accueil.php"><img src="images/logoETC.png" alt="Logo d'ETC"></a>
    <nav id="Menu">
        <a href="accueil.php" class="<?= $accueilClass ?>">Accueil</a>
        <a href="produits.php" class="<?= $produitsClass ?>">Nos Produits</a>
        <a href="quiSommesNous.php" class="<?= $infosETCClass?>">Qui sommes-nous ?</a>
        <a href="contact.php" class="<?= $contactClass ?>">Contact</a>
    </nav>
    <button id="affichageNavTel"><i class="fa-solid fa-bars" id="contenuBoutonNav"></i></button>
</header>
<script src="fichiersCommuns/jsNav.js"></script>