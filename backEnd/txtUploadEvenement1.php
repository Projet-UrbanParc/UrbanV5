<?php 

$titre = $_POST['titre1'];

$content = $_POST['actualite1'];

$file = "./LinksEvenement/Section1.html";

$current = file_get_contents($file, true);

$current = "<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <title>Main Evenement/ Section 1</title>
</head>
<body>
  <section id='sectionevent1' class='section1'>
    <!-- ARTICLE IMAGE -->
    <article>
      <img src='backEnd/LinksEvenement/img/1.jpg'>
    </article>
    <!-- ARTICLE TEXTE -->
    <article>
      <h2>$titre/h2>
      <p>$content</p>
    </article>
  </section>
</body>
</html>";


file_put_contents($file, $current);


echo "<head><link href='https://fonts.googleapis.com/css?family=Frijole|Monofett' rel='stylesheet'></head>";
echo "<style> body {background-color: #E7D8C8; font-family: 'Frijole', cursive;} h2 {text-align: center;}</style>";
echo "<h2>Ecriture Réussie, redirection dans quelques secondes..</h2>";
header('Refresh: 3; url= ../backEnd/quelaforcesoitavectoi.php');






?>
    
    
    