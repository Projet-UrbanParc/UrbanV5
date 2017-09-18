<?php

$connection = mysqli_connect('urbanparscodalog.mysql.db','urbanparscodalog','Rz3tvvw0p88u');
if(!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'urbanparscodalog');
if (!$select_db){
    die('Database Selection Failed' . mysqli_error($connection));
}