<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Yanis</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
   <link rel="stylesheet" href="style.css">
   <link rel="icon" type="image/png" href="/img/YanisCartoon.jpg" />
</head>
<body>

<?php include_once 'PHP/menu.php'; ?>

   <div class="container" id="blur">
      <div class="card">
         <div class="containt">
            <h2>Yanis</h2>
            <p></p>
            <a href="#" onclick="toggle()">+ d'info</a>
   
         </div>
         <img src="img/YanisCartoon.jpg" alt="Yanis">
         
      </div>
   </div>  
      <div id="popup">
         <h2>This is Yanis</h2>
         <p>Yanis a 20 ans et est passionné de sport, plus particulièrement de combat. Depuis petit il pratique le judo et mais désormais il fait du Jijutsu Brésilien. Il a pour but de devenir développeur Full Stack, c'est pour ça qu'il a intégré l'axe Coding & Digital Innovation à l'IIM.</p>
         <button class="buttons" href="#" onclick="toggle()">Retirer</button>
      </div>
      <footer>
         <div class="footer">
            <h2>Contact</h2>
            <p>N'ayez pas peur de le contacter, il ne vous mordra pas !</p>
            <ul class="social_media">
               <li><a href="#"><i class="fa fa-linkedin""></i></a></li>
               <li><a href="#"><i class="fa fa-instagram""></i></a></li>
               <li><a href="#"><i class="fa fa-twitter""></i></a></li>
            </ul>
         </div>
      </footer>
      
   
   
   
   
   
   
      
      <script type="text/javascript" src="script.js"></script>
</body>
</html>