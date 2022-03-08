<?php
function myConnection(){
    $bdd = new PDO(
        'mysql:host=localhost;dbname=tplogregshow',
        'root',
        'root',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
);
    return $bdd;
}

?>