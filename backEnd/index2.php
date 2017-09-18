<?php  //Start the Session
//session_start();
 //require('connect.php');
//3. If the form is submitted or not.
//3.1 If the form is submitted
$page = $_POST['pageSelect'];

$valeur = 1;
if ($_POST['username'] == 'Charlie' && $_POST['password'] == 'urbancoda'){
   
$valeur = 2;

}


if ($valeur == 2) {

 include('showtest.php');   

}


?>

