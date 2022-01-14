<?php
$mysqli = new mysqli("localhost", "root", "", "toast");
 if ($mysqli->connect_error) {
    die('Erreur de connexion ('.$mysqli->connect_errno.')'. $mysqli->connect_error);
}
?>