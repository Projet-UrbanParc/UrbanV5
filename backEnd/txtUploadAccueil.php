<?php 

$titre = $_POST['titre'];

$content = $_POST['actualite'];

$file = "./LinksAccueil/Section4.html";

$current = file_get_contents($file, true);

$current = "<!DOCTYPE html>
            <html>
                <head>
                    <meta charset='utf-8'>
                    <title>Main Accueil/ Section 4</title>
                </head>
                <body>
                    <section id='section4' class='section4'>
                    <!-- ARTICLE TEXT -->
                        <article>
                            <h2>$titre</h2>
                            <p>$content</p>
                        </article>
                    <!-- ARTICLE IMAGE -->
                        <div>
                            <img src='backEnd/LinksAccueil/img/5.jpg'>
                        </div>
                    </section>
                </body>
            </html>";


file_put_contents($file, $current);


echo "<head><link href='https://fonts.googleapis.com/css?family=Frijole|Monofett' rel='stylesheet'></head>";
echo "<style> body {background-color: #E7D8C8; font-family: 'Frijole', cursive;} h2 {text-align: center;}</style>";
echo "<h2>Ecriture Réussie, redirection dans quelques secondes..</h2>";
header('Refresh: 3; url= ../backEnd/quelaforcesoitavectoi.php');






?>
    
    
    