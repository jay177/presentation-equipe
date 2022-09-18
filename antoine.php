<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antoine</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include_once 'PHP/menu.php'; ?>
    <h1>
        antoine
    </h1>

    <div class="container" id="blur">
        <div class="card">
           <div class="containt">
              <h2>Antoine</h2>
              <p> </p>
              <a href="#" onclick="toggle()">info</a>
     
           </div>
           <img src="img/antoine-removebg-preview.png" alt="">
           
        </div>
     </div>
     
        <div id="popup">
           <h2>L'histoire de Antoine </h2>
           <p>j'ai connue antoine il n'ya que quelque jour a la rentrée du coup nous avons fait des traveaux ensemble</p>
           <p>donc j'apprend tourjour a le connaitre je ne sait pour l'instant pas grand chose mais je sais que lui et yanis vienne du même lycée </p>
           <p>j'ai récament qu'il aimait beaucoup la musique </p>
           <figure>
    <figcaption>je vous mets l'un des morceaux favorie d'antoine </figcaption>
    <audio
        controls
        src="song/boss.mp3">
            votre navigateur ne supporte pas cette 
            <code>audio</code> element.
    </audio>
</figure>

         <h2>j'spere que vous vous avez appréciez ce morceaux maintenant passons au ambition d'antoine </h2>
         <p>il a pour ambition de devenir un devloppeur full stack c'est a dire un devellopeur </p>
         <p>maitrisanant a certain nombre de language ce qui lui permmetra une grange polyvalance contrairement a un spécialiste </p>

         <details>
            <summary>
               easter egg
            </summary>
         <h2>ps c'est cels la ça musique preférez mais il ne l'assume pas </h2>
         <iframe width="500" height="400" src="https://www.youtube.com/embed/9bZkp7q19f0?autoplay=1&mute=1" title="PSY - GANGNAM STYLE(강남스타일) M/V" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         </details>
           <a href="#" onclick="toggle()">Close</a>
        </div>
        
     
     
     
     
     
     
      
        <script type="text/javascript" src="script.js"></script>
</body>
</html>