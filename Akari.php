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
    <title>Akari</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
  <div class="Akari">
    <h1>Akari</h1>
    <img src="img/Akari.png" width="200" height="200">
    <br>
    <p>
      The song "燈 (Akari)" by 崎山蒼志 (Soushi Sakiyama) explores themes of self-reflection, longing, and the complexities of relationships. 
      The lyrics reflect the struggles and emotions that arise from personal growth, regrets, and the desire for genuine connections.
      In the first verse, the narrator expresses a sense of urgency in wanting to reveal their true intentions and feelings to someone before their good intentions are shattered. 
      They describe their life as becoming clouded and uncertain, indicated by the metaphor of a flickering light. 
      The pre-chorus touches upon accepting the circumstances even if they are unsatisfying, acknowledging that sometimes things don't add up or make sense. 
      There is a feeling of questioning the purpose and significance of certain choices and actions.
      The chorus highlights the realization that what may seem ordinary or mundane to others holds a unique importance and meaning in the narrator's life. 
      They crave even trivial conversations and moments with someone, emphasizing their desire for a deeper connection and the vulnerability of blushing in front of them.
      The interlude presents images of darkness, flight, searching, and hidden love. It portrays a sense of uncertainty, loneliness, and a yearning to escape. 
      The post-chorus further delves into the fleeting nature of memories and the insignificance of the past, suggesting a desire to embrace the uncertainty of the future.
      The second verse explores the paradoxical nature of relationships, as the narrator understands and empathizes with the pain and scars of others, yet still ends up hurting them with their own actions. 
      The mention of ego suggests a struggle with personal growth and a longing for a genuine connection that burns transparently between the narrator and the person they are addressing.
      In the bridge and breakdown, there is a repetition of the chorus, emphasizing the recognition and acceptance of the limited and precious nature of certain experiences. 
      Reference is made to the night's silence, suggesting it holds a mundane significance only for the narrator who awakens in their memories. 
      The song concludes with a final chorus and outro, expressing a longing to reach out to someone who is uniquely present in the narrator's life. 
      The repetition of "孤独 under crying" (loneliness under crying) in the outro signifies the ongoing emotional struggle and vulnerability experienced by the narrator. 
      The lyrics ultimately convey a strong sense of longing, introspection, and the delicate balance between isolation and connection.
    </p>
  </div>
</body>
</html>
