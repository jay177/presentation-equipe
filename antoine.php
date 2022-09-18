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
  

    <div class="container" id="blur">
        <div class="card">
           <div class="containt">
              <h2>Antoine</h2>
              <p> </p>
              <a href="#" onclick="toggle()">info</a>
     
           </div>
           <img src="IMG/antoine-removebg-preview.png" alt="">
           
        </div>
     </div>
     
        <div id="popup">
           <h2>L'histoire d’Antoine </h2>
           <p>J'ai connu Antoine il y’a quelques jours à la rentrée nous avons donc fait des travaux ensemble.</p>
           <p>Ainsi, nous sommes toujours entrain de faire connaissances. Je ne le connais pas encore énormément mais je sais que lui et yanis viennent du même lycée.</p>
           <p>De plus, j'ai récemment appris qu'il aimait beaucoup la musique. </p>
           <figure>
    <figcaption>Je vous joint l'un des morceaux favoris d'Antoine. </figcaption>
    <audio
        controls
        src="song/boss.mp3">
            votre navigateur ne supporte pas cette 
            <code>audio</code> element.
    </audio>
</figure>

         <h2>J’espère que vous vous avez apprécié ce morceaux, autant que nous, maintenant, passons aux ambitions d'Antoine </h2>
         <p>Il a pour but de devenir un développeur full stack c'est à dire un développeur  </p>
         <p>maîtrisant un certain nombre de languages, ceci lui permettrai une polyvalence à toute épreuve contrairement a un spécialiste qui se concentrerait sur une tâche précise.  </p>

         <details>
            <summary>
               easter egg
            </summary>
         <h2>Ps: c'est celle là sa musique préférée mais il ne l'assume pas </h2>
         <iframe width="500" height="400" src="https://www.youtube.com/embed/9bZkp7q19f0?autoplay=1&mute=1" title="PSY - GANGNAM STYLE(강남스타일) M/V" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         </details>
           <a href="#" onclick="toggle()">Close</a>
        </div>
        
     
     
     
     
     
     
      
        <script type="text/javascript" src="script.js"></script>
</body>
</html>