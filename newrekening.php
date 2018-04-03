<?php
    include "credentials/credentials.php";
    include "classes.php";

$rekening = json_decode($_POST['rekening']);

$sqlNewRekening = "INSERT INTO `rsa_rekeningen`(`rekeningnummer`, `pincode`, `saldo`) VALUES ('$rekening->rekeningNummer','$rekening->pincode','$rekening->saldo')";

$conn->query($sqlNewRekening);