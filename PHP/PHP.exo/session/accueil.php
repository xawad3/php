<?php 
session_start();

$idSession = session_id();

$_SESSION['prenom'] = 'Zendaya';
$_SESSION['age'] = 25;
$_SESSION['statut'] = 'est en couple';



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MA SESSION</title>
</head>
<body>
    <h1>MA SESSION TEST</h1>
    <?php
        if ($idSession) {
            echo 'ID de session via fonction session_id(): <br>' .$idSession. '<br>';
        }
        echo '<br><br>';
        if(isset($_COOKIE['PHPSESSID'])){
            echo 'ID de session récupéré via super global $_COOKIE: <br>' .$_COOKIE['PHPSESSID'];
        }

        echo '<br><br>';
        
        echo 'Hello ' .$_SESSION['prenom']. 'tu as '.$_SESSION['age']. ' et tu es malheureusement '.$_SESSION['statut'];
        echo '<br><br>';
        if (isset($_SESSION['prenom'])){
            echo 'la session est définie';
        } else {
            echo 'session non paramétrée';
        }

        //session_unset();
        //unset($_SESSION['age']);
        //unset($_SESSION['prenom']);
        session_destroy();
        echo '<br> <br>';

        if (isset($_SESSION['prenom'])){
            echo 'La session est définie.<br>';
        }
        else{
            echo 'Session non paramétrée.<br>';    
        }
        
        //echo 'Hello ' .$_SESSION['prenom']. 'tu as '.$_SESSION['age']. ' et tu es malheureusement '.$_SESSION['statut'];
        
    ?>
</body>
</html>