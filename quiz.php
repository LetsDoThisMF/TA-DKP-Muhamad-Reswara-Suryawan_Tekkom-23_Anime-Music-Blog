<?php 
  include_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess The Anime Song!</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const audios = document.querySelectorAll('audio');
            audios.forEach(audio => {
                audio.addEventListener('play', function() {
                    audios.forEach(otherAudio => {
                        if (otherAudio !== audio) {
                            otherAudio.pause();
                        }
                    });
                });
            });
        });
    </script>
</head>
<body>

<section class="quiz">
    <h2>Guess the Anime by Song!</h2>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <?php
        $questions = [
            ["What anime is this song from?", "img/Specialz.png", "Songs/Specialz.mp3", ["a) Naruto", "b) Vinland Saga", "c) Neon Genesis Evangelion", "d) Jujutsu Kaisen"], "d"],
            ["What anime is this song from?", "img/KyouranHeyKids.png", "Songs/KyouranHeyKids.mp3", ["a) Bleach", "b) Noragami", "c) Hunter X Hunter", "d) Dragon Ball"], "b"],
            ["What anime is this song from?", "img/Unravel.png", "Songs/Unravel.mp3", ["a) Angel Beats", "b) Classroom of the Elite", "c) Tokyo Ghoul", "d) Overlord"], "c"],
            ["What anime is this song from?", "img/Silhouette.png", "Songs/Silhouette.mp3", ["a) Dr. Stone", "b) Gintama", "c) Naruto Shippuden", "d) Attack on Titan"], "c"],
            ["What anime is this song from?", "img/DaddyDo.png", "Songs/DaddyDaddyDo.mp3", ["a) Kaguya Sama Love is War", "b) Bunny Girl Senpai", "c) Clannad", "d) Oshi No Ko"], "a"],
            ["What anime is this song from?", "img/HikaruNara.png", "Songs/HikaruNara.mp3", ["a) Love, Chunibyo & Other Delusions", "b) Bakemonogatari", "c) Angel Beats", "d) Your Lie in April"], "d"],
            ["What anime is this song from?", "img/Mukanjyo.png", "Songs/Mukanjyo.mp3", ["a) Jojo's Bizarre Adventure", "b) Mob Psycho 100", "c) One Piece", "d) Vinland Saga"], "d"],
            ["What anime is this song from?", "img/Jojo.png", "Songs/Jojo.mp3", ["a) Jojo's Bizarre Adventure Part 3", "b) Jojo's Bizarre Adventure Part 6", "c) Jojo's Bizarre Adventure Part 5", "d) Jojo's Bizarre Adventure Part 4"], "c"],
            ["What anime is this song from?", "img/HunterXHunter.png", "Songs/HunterXHunter.mp3", ["a) Fire Force", "b) Hunter X Hunter", "c) Death Note", "d) Chainsaw Man"], "b"],
            ["What anime is this song from?", "img/AkumaNoKo.png", "Songs/AkumaNoKo.mp3", ["a) Attack on Titan", "b) Black Clover", "c) Kaiju No. 8", "d) Gurren Lagann"], "a"]
        ];

        foreach ($questions as $index => $question) {
            echo "<h3>" . ($index + 1) . ". " . $question[0] . "</h3>";
            echo "<img src='" . $question[1] . "' alt='Description of the image' width='200' height='200'><br>";
            echo "<audio controls><source src='" . $question[2] . "' type='audio/mp3'>This browser does not support HTML5 audio</audio><br>";

        foreach ($question[3] as $option) {
                $value = substr($option, 0, 1); 
                echo "<input type='radio' name='q" . ($index + 1) . "' value='$value'> $option<br>";
            }
            echo "<br>";
        }
        ?>

        <input type="submit" name="submit" value="Submit">
    </form>
    

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $score = 0;

        foreach ($questions as $index => $question) {
            $questionNumber = $index + 1;
            $answerKey = "q" . $questionNumber;
            if (isset($_POST[$answerKey]) && $_POST[$answerKey] == $question[4]) {
                $score++;
            }
        }

        echo "<h2>Your Score: $score / " . count($questions) . "</h2>";
        echo "<li><a href='quiz.php'>Retry Quiz</a></li>";
    }
    ?>
</section>

</body>
</html>
