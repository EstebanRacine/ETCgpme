<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="images/logoETC2.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/quiSommesNous.css">
    <title>Qui sommes-nous ?</title>
</head>
<body>
<div class="container">
    <?php
    include "fichiersCommuns/header.php";
    ?>

    <div class="contenuSavoirPlus">
        <div class="divVideoInfos">
            <div class="imgStartSommes">
                <!--<video src="videos/videoTest.mp4" class="videoPresentation" controls></video>-->
                <!--<img src="images/quiSommesNous/imagePersonnelETC.jpg" alt="Image des étudiants"></img>-->
                <img src="images/quiSommesNous/ETCclasseComplet.jpg" alt="Image des étudiants"></img>
                <p>Photo par Ludovic LAUDE pour l'Est Républicain</p>
            </div>
            <div class="infosETC">
                <h1>Enroule Ton Cable</h1>
                <p>Étudiant(e)s en première année de BTS GPME, nous avons avec l'aide de nos professeurs Mesdames Bailly et Drezet, créé notre mini-entreprise ETC (Enroule Ton Câble).</p>
            </div>
        </div>
        <div class="infosPole">
            <h1>Pour mieux nous connaître</h1>
            <div class="carroussel">
                <article>
                    <img src="images/quiSommesNous/storyCom.PNG" alt="Image du Pole Communication">
                    <h3>Pôle Communication</h3>
                </article>

                <article>
                    <img src="images/quiSommesNous/storyCoo.PNG" alt="Image du Pole Coordination">
                    <h3>Pôle Coordination</h3>
                </article>

                <article>
                    <img src="images/quiSommesNous/storyFin.PNG" alt="Image du Pole Finance">
                    <h3>Pôle Finance</h3>
                </article>

                <article>
                    <img src="images/quiSommesNous/storyPro.PNG" alt="Image du Pole Production">
                    <h3>Pôle Production</h3>
                </article>
            </div>
        </div>
        <div class="infosPartenaires">
            <h1>Nos partenaires</h1>

            <div class="partenaires">
                <img src="images/quiSommesNous/EPA.png" alt="Logo d'EPA">
                <h2>Entreprendre Pour Apprendre</h2>
                <h3>EPA</h3>
                <p>Nous permet de faire vivre une aventure entrepreneuriale collective.</p>
            </div>

            <div class="partenaires">
                <img src="images/quiSommesNous/biathlon.png" alt="Logo de Biathlon Sanseigne">
                <h2>Biathlon Sanseigne</h2>
                <h3>Jason DREZET</h3>
                <p>Spécialiste en carabine de biathlon, crosses et accessoires situé aux Rousses dans le Jura. Il a permis d'assurer l'étude, le développement et la fabrication de notre produit.</p>
            </div>

            <!--            <div class="partenaires">-->
            <!--                <img src="images/quiSommesNous/humbert.png" alt="Représentation de HUMBERT ELECTRICITE">-->
            <!--                <h2>HUMBERT Elécricité</h2>-->
            <!--                <h3>Romain HUMBERT</h3>-->
            <!--                <p>Notre mentor qui est situé à Sarrogna dans le Jura.</p>-->
            <!--            </div>-->

            <div class="partenaires">
                <img src="images/quiSommesNous/salvi.png" alt="Logo de Salvi">
                <h2>Salvi Sanglier</h2>
                <h3>Patrick Salvi</h3>
                <p>Une entreprise tierce qui nous permet de vous proposer une boite en bois comme emballage.</p>
            </div>

            <div class="partenaires">
                <img src="images/quiSommesNous/travailCouleur.png" alt="Logo de Travail en couleur">
                <h2>Travail en couleur</h2>
                <h3>Sylvie DABERE</h3>
                <p>Cette entreprise située à Doubs a assuré la fourniture et le marquage des t-shirts à l'effigie d'ETC. </p>
            </div>

            <div class="partenaires">
                <img src="images/quiSommesNous/BTSSIO.png" alt="Représentation du BTS SIO">
                <h2>BTS SIO du lycée Louis Pergaud</h2>
                <h3>Esteban RACINE</h3>
                <p>Autre BTS de notre lycée avec lequel nous sommes en collaboration pour la gestion de notre site Internet.</p>
            </div>
        </div>
    </div>

    <?php
    include "fichiersCommuns/footer.php";
    ?>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.4.1/jquery-migrate.min.js" integrity="sha512-KgffulL3mxrOsDicgQWA11O6q6oKeWcV00VxgfJw4TcM8XRQT8Df9EsrYxDf7tpVpfl3qcYD96BpyPvA4d1FDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="fichiersCommuns/jsPoles.js"></script>

</body>
</html>