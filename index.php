<?php

    include "credentials/credentials.php";
    
    session_start();
    
    $login = "hidden";
    $hideLogin = " ";
    if(isset($_SESSION['master'])){         //user ingelogd
        $hideMaster = "hidden";
        $hideLogin = "hidden";
        $login = " ";
    }else{                                  //niet ingelogd
        $hideMaster = "hidden";
        }
    if(isset($_SESSION['master']) && $_SESSION['master'] == 'true'){    //admin ingelogd
        $hideMaster = " ";
        $hideLogin = "hidden";
        $login = " ";
    }

?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php include "functions.php"?>
        <script src="jquery.js"></script>
        <link rel="stylesheet" type="text/css" href="cssFrontPage.css">
    </head>
    <body class="body">
        <div class="titelDiv"><h1>RSA Bank</h1>
            <div class='loginDiv' <?php echo $hideLogin ?>>
                <form action="login.php" method="POST">       
                    <input type=input name=uid id=gbnaam placeholder="gebruikersnaam/email">
                    <input type=password name=pwd id=wachtw placeholder="wachtwoord">
                    <input type=submit value=login class=buttonLoginCss id=Login>
                </form>
            </div>
        </div>
            <div class='welkom' <?php echo $login ?>><h2>U bent ingelogd</h2></div>
        <div class="SignUpDiv" <?php echo $hideMaster ?>>
            
            <span class="aanmeldTitel"><h3>Maak gebruiker aan</h3></span>
            <input class="signUpText" size=30  type=text id=username name=username placeholder=Gebruikersnaam><br>
            <input class="signUpText" size=30 type=text id=email name=email placeholder=Email><br>
            <input class="signUpText" size=30  type=password id=pwd name=pwd placeholder=Wachtwoord><br>
            <input class="signUpText" size=30 type=text id=rechten name=rechten placeholder=Rechten><br><br>
            <input class="buttonCss" id=User type=button value="Maak gebruiker aan" onclick="newuser();"><br>
        </div>
       
        
        <div class="maakRekeningDiv">
            <span class="aanmeldTitel"><h3>Maak rekening aan</h3></span>
            <input type=text size=30 id=rekeningnr name=rekeningnr placeholder=Rekeningnummer><br>
            <input type=text size=30 id=saldo name=saldo placeholder=Saldo><br>
            <input type=password size=31 id=pincode name=pincode placeholder=Pincode><br><br><br>
            <input type=button class="buttonCss" value="Maak rekening aan" onclick="newrekening();"><br>
        </div>
        
        
        <div class="transactieDiv">
            <span class="transactieTitel"><h3 >Maak transactie</h3></span>
            <input type=text size=30 id=ontvanger name=ontvanger placeholder="Rekeningnummer ontvanger"><br>
            <input type=text size=30 id=verzender name=verzender placeholder="Rekeningnummer verzender"><br>
            <input type=text size=30 id=bedrag name=bedrag placeholder=Bedrag><br>
            <input type=text size=30 id=opmerking name=opmerking placeholder=Opmerking><br><br>
            <!--<input type=password size=30 id=pincode name=pincode placeholder=Pincode><br><br>-->
            <input type=button class="buttonCss" value="Maak transactie aan" onclick="newtransactie();"><br>
        </div>
  
    </body>
        <footer>
            <div class='PoweredByDiv'><h1>Powered By</h1></div>
            <div class="logos">
                <table class="tableLogos">
                    <td><img src="img/php2.jpg" height="100px"></td>
                    <td><img src="img/sql.png" height="100px"></td>
                    <td><img src="img/js.png" height="100px"></td>
                    <td><img src="img/html.png" height="100px"></td>
                    <td><img src="img/jq.png" height="100px"></td>
                    <td><img src="img/css.png" height="100px"></td>
                </table>
            </div> 
        </footer>
 
</html>


