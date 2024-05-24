<?php 
  include_once 'header.php';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Quiz</title>
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
    <section>
        <div>
            <h1 class="music">Top Songs of the Day</h1>
        </div>

        <div class="blog">
                        <div>
                        <img src="img/Crown1.png" class="Crown1" width="100" height="100">
                        <p>Ao No Sumika - Tatsuya Kitani</p>
                            <img src="img/AoNoSumika.png" width="200" height="200">
                            <br>
                            <audio id="song2" controls >
                            <source src="Songs/AoNoSumika.mp3"type="audio/mp3">
                                This browser does not support HTML5 audio
                            </audio>
                            <p>
                            Author : Tatsuya Kitani
                            </p>
                            <p>
                            Series : Jujutsu Kaisen Season 2
                            </p>  
                            <p>
                            Release Date : July 19, 2023
                            </p>
                        </div>
                        <div>
                        <img src="img/Crown2.png" class="Crown1" width="100" height="100">
                            <p>Akari - Soushi Sakiyama</p>
                            <img src="img/Akari.png" width="200" height="200">
                            <br>
                            <audio id="song3" controls >
                            <source src="Songs/Akari.mp3"type="audio/mp3">
                                This browser does not support HTML5 audio
                            </audio>
                            <p>
                            Author : Soushi Sakiyama
                            </p>
                            <p>
                            Series : Jujutsu Kaisen Season 2
                            </p>  
                            <p>
                            Release Date : July 7, 2023
                            </p>
                        </div>
                        <div>
                        <img src="img/Crown3.png" class="Crown1" width="100" height="100">
                            <p>Wrong World - TOGENASHI TOGEARI</p>
                            <img src="img/GirlsBandCry.png" alt="Description of the image" width="200" height="200">
                            <br>
                            <audio id="song3" controls >
                            <source src="Songs/WrongWorld.mp3"type="audio/mp3">
                                This browser does not support HTML5 audio
                            </audio>
                            <p>
                            Author : TOGENASHI TOGEARI
                            </p>
                            <p>
                            Series : Girls Band Cry
                            </p>
                            <p>
                            Release Date : April 6, 2024
                            </p>
                        </div>

