<?php
session_start();

include 'credentials.php';
include 'functions.php';


if(empty($_POST['uid']) || empty($_POST['pwd'])){
    header("Location:index.php?login=error");
    } else {
        $user = $_POST['uid'];
        $pw = $_POST['pwd'];

            $sql = "SELECT * FROM rsa_gebruikers WHERE (naam='$user' OR email='$user') AND wachtwoord='$pw'"; 
            echo $sql;
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) < 1){
                header("Location:index.php?login=Nonexistent");
            }else{
                
                $_SESSION['userID'] = $user;
                $_SESSION['userPW'] = $pw;
                
                while($row = mysqli_fetch_assoc($result)) {
                        if($row['rechten'] == "master rights"){   
                            $_SESSION['master'] = 'true';
                            header("Location:index.php?working+master");
                        }else{
                            $_SESSION['master'] = 'ingelogd';
                            header("Location:index.php?working");
                        }
                }              
            }
}        