<?php
include  "cnx.php";


$username=$_POST['username'];
$email=$_POST['email'];
$msg=$_POST['msg'];



$requete = "INSERT INTO event (username,email,msg) VALUES ('$username','$email','$msg')";


$rslt = $mysqli->query($requete) or die ($mysqli->error());

header('Location: result.html');
?>

