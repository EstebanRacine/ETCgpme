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
    <link rel="shortcut icon" href="images/logoETC.png" type="image/x-icon">
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
            <video src="videos/videoTest.mp4" class="videoPresentation" controls></video>
            <div class="infosETC">
                <h1>Enroule Ton Cable</h1>
                <p>Nous sommes les élèves de première année de BTS GPME, nous avons créé notre mini-entreprise ETC
                    (Enroule Ton Cable). Nous vous proposons un range-câble en matière recyclable de différents coloris.
                    Suite à un sondage, nous avons constaté que les personnes les plus intéressés par notre produit sont
                    autant masculins que féminins et pour la plupart lycéens ou salariés.</p>
            </div>
        </div>
        <div class="infosPole">
            <h1>Pour mieux nous connaître</h1>
            <div class="carroussel">
                <article>
                    <img src="images/quiSommesNous/storyCom.PNG" alt="Image du Pole Communication">
                    <h3>Pôle Communication</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque blanditiis, cum delectus dolores eum explicabo facilis fugit libero maxime, modi non odit provident quibusdam repellendus repudiandae sequi voluptate voluptates voluptatibus.</p>
                </article>

                <article>
                    <img src="images/quiSommesNous/storyCoo.PNG" alt="Image du Pole Coordination">
                    <h3>Pôle Coordination</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, dolorem dolores fuga harum, ipsam laudantium libero obcaecati odit perferendis perspiciatis quos ratione saepe tempora. Cupiditate facilis modi molestias ratione sequi.</p>
                </article>

                <article>
                    <img src="images/quiSommesNous/storyFin.PNG" alt="Image du Pole Finance">
                    <h3>Pôle Finance</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta doloremque modi neque rem voluptas. Asperiores aspernatur deleniti dignissimos doloribus, enim error est exercitationem libero quo recusandae saepe, totam voluptatum. Impedit?</p>
                </article>

                <article>
                    <img src="images/quiSommesNous/storyPro.PNG" alt="Image du Pole Production">
                    <h3>Pôle Production</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam architecto atque beatae consequuntur deleniti error impedit in incidunt itaque, modi natus neque nihil perspiciatis quaerat quisquam suscipit, temporibus veniam voluptatibus?</p>
                </article>
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