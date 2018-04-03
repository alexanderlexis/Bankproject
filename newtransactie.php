<?php
    include "credentials/credentials.php";
    include "classes.php";

$transactie = json_decode($_POST['transactie']);

$sqlSaldo = "SELECT `saldo` FROM `rsa_rekeningen` WHERE `rekeningnummer` = '$transactie->rekeningVerzender'";

$saldocheck = $conn->query($sqlSaldo);

if ($saldocheck->num_rows > 0) {
               while($row = $saldocheck->fetch_assoc()) {
            $saldo =  $row['saldo'];
               }
}

if ($transactie->bedrag <= $saldo){

$sqlNewTransactie = "INSERT INTO `rsa_transacties`(`bedrag`, `ontvanger`, `verzender`,`opmerking`) VALUES ('$transactie->bedrag','$transactie->rekeningOntvanger','$transactie->rekeningVerzender','$transactie->opmerking')";
$sqlBijschrijving = "UPDATE `rsa_rekeningen` SET `saldo` = `saldo` + '$transactie->bedrag' WHERE `rekeningnummer` = '$transactie->rekeningOntvanger'";
$sqlAfschrijving = "UPDATE `rsa_rekeningen` SET `saldo` = `saldo` - '$transactie->bedrag' WHERE `rekeningnummer` = '$transactie->rekeningVerzender'";

$conn->query($sqlNewTransactie);
$conn->query($sqlBijschrijving);
$conn->query($sqlAfschrijving);
echo "Transactie geslaagd";
} else {
    echo "Saldo te laag, transactie afgebroken";
}