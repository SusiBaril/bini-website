<?php

require_once('./classes/database.php');

$con = new database();

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bini Official</title>

    <link rel="stylesheet" href="./css/style.css?v=<?php echo time();?>">

    <link rel="stylesheet" href="./bootstrap-4.5.3-dist/css/bootstrap.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>

    <?php include("navbar.php") ?>

    <div class="main-content">

        <div class="image-banner">
            <div class="banner"><img src="image//bini-wallpaper.webp" alt="Image 2"></div>
        </div>
        

        <div class="about-bini" id="about">

            <div class="about-img">

                <img src="image/bini-yes.jpg" alt="">

            </div>

            <div class="about-description">

                <div class="about-title">
                    <h1>About Bini</h1>
                </div>
                <div class="about-body">
    
                    <h5>Filipino pop phenomenon BINI features 8 multi-talented members, Aiah, Colet, Maloi, Gwen, Stacey, Mikha, Jhoanna, and Sheena. The girls have quickly become the biggest female Filipino artist in history, and second biggest artist overall in the Philippines, holding both the #1 & #2 spots on the top Filipino music charts simultaneously with the hits “Salamin, Salamin” and “Pantropiko.”
                    <br>
                    BINI’s sound is shaped by homegrown artists and global sensations alike. On the heels of their unprecedented growth in socials and in streaming listenership (30M +), the girls recently sold out their “BINIverse” tour in record-breaking time, and have been heralded as one of Teen Vogue’s 2024 Girl Groups to watch!</h5>
    
                </div>

            </div>

        </div>

        <div class="music-tab">


            
        </div>
        

    </div>
    
</body>

<script src="./js/script.js"></script>
<script src="./bootstrap-4.5.3-dist/js/bootstrap.js"></script>

</html>