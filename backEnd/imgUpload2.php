<?php
$target_dir = "../backEnd/LinksBistrot/img/";
$target_file = $target_dir . basename($_FILES["file_upload"]["name"]);


// Check for errors
if($_FILES['file_upload']['error'] > 0){
    die("Erreur pendant l'upload");
}

if(!getimagesize($_FILES['file_upload']['tmp_name'])){
    die('Est ce bien une image ?');
}

// Check filesize
if($_FILES['file_upload']['size'] > 500000){
    die('Le fichier est trop lourd :(');
}


// Upload file
if(!move_uploaded_file($_FILES['file_upload']['tmp_name'], '../backEnd/LinksBistrot/img/' . $_FILES['file_upload']['name'])){
     die("Erreur durant l'upload, contactez vos webmaster.");
    
    
    
    
}
echo "<head><link href='https://fonts.googleapis.com/css?family=Frijole|Monofett' rel='stylesheet'></head>";
echo "<style> body {background-color: #E7D8C8; font-family: 'Frijole', cursive;} h2 {text-align: center;}</style>";
echo "<h2>Transfert Réussie, redirection dans quelques secondes..</h2>";
rename($target_file , '../backEnd/LinksBistrot/img/1.jpg');
header('Refresh: 3; url= ../backEnd/quelaforcesoitavectoi.php');
die;

?>