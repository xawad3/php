<?php

//$_SESSION['test'] = 'test validé';
function connexion_BD() {
try {
$db = new PDO("mysql:host=localhost;dbname=test_session;charset=utf8", "root", "root");
return $db;
} catch (Exception $e) {
    die($e->getMessage());
}

}
?>