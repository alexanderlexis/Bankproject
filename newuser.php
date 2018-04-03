<?php
    include "credentials/credentials.php";
    include "classes.php";

$gebruiker = json_decode($_POST['gebruiker']);

$sqlNewUser = "INSERT INTO `rsa_gebruikers`(`naam`, `email`, `wachtwoord`, `rechten`) VALUES ('$gebruiker->naam','$gebruiker->email','$gebruiker->wachtwoord','$gebruiker->rechten')";

$conn->query($sqlNewUser);