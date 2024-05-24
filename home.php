<?php 
  include_once 'header.php';
?>
    <section class="index-intro">
        <?php
            if(isset($_SESSION["userid"])){
                echo "<p>Welcome " . $_SESSION["useruid"] . "</p>";
            }
        ?>
    </section>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <section class="intro">
        <img src="img/Lofi.png" class="homeimg">
        <br><br><br><br><br><br><br><br><br><br>
        <h1>HOT Releases!</h1>
        <div class="box-container">
            <div class="box">
                <img src="img/KyouranHeyKids.png" class="homie" width="200" height="200">
                <div class="maintext">
                    <p>  
                    "Kyouran Hey Kids!!" by The Oral Cigarettes is a rock song released on November 11, 2015. It gained significant popularity as the opening theme for the anime "Noragami Aragoto." The song, composed by Takuya Yamanaka, features intense and energetic lyrics that reflect themes of chaos and youthful rebellion. Its vibrant and dynamic music video has also contributed to its popularity among fans of both the band and the anime​ (Lyrical Nonsense)​​ (Anime Songs Lyrics)​​ (OWLDB)​.
                    </p>
                <nav>
                    <ul>
                        <li><a href="Kyouran.php">Kyouran Hey Kids!!</a></li>
                    </ul>
                </nav>
                </div>
            </div>
            <div class="box2">
                <img src="img/Akari.png" class="homie2" width="200" height="200">
                <div class="maintext2">
                    <p>
                    Soushi Sakiyama's song "Akari" serves as the ending theme for the second season of the popular anime series "Jujutsu Kaisen." Released by Milan Records on July 7, 2023, the song reflects the emotional journey of the character Suguru Geto, exploring themes of light, change, and emotional delicacy. Sakiyama expressed his honor in contributing to the series and described "Akari" as a song that respects the complexities of the human heart and the experiences that shape it​ (Lyrical Nonsense)​​ (Anime News Network)​.
                    </p>
                <nav>
                    <ul>
                        <li><a href="Akari.php">Akari</a></li>
                    </ul>
                </nav>
                </div>
            </div>
            <div class="box3">
                <img src="img/AoNoSumika.png" class="homie3" width="200" height="200">
                <div class="maintext3">
                    <p>
                    Tatsuya Kitani's latest single, "Ao no Sumika," serves as the opening theme for the second season of the popular anime Jujutsu Kaisen. This track, also known as "Blue House," was specifically composed for the "Kaigyoku/Gyokusetsu" arc of the series. The single is available on various music platforms and has been released on CD, featuring additional tracks such as "Suteki na Shuumatsu wo!" and an instrumental version of "Ao no Sumika"​ (Anime News Network)​​ (Anime News Network)​.
                    </p>
                <nav>
                    <ul>
                        <li><a href="AoNoSumika.php">Ao No Sumika</a></li>
                    </ul>
                </nav>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
