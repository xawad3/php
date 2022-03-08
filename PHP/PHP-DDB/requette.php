<?php


//Je stocke ma requête
//$sql = "SELECT * FROM users"; 
//J'envoie la requête et stocke la réponse
//$req = $db->query($sql);
//je traite la réponse et stock les données
//fetchall créée un tableau avec toutes les réponses

//$data = $req->fetchAll(PDO::FETCH_OBJ);



//$sql = "SELECT FROM users WHERE pseudo = :pseudo";
/////$req = $db->prepare($sql);

//$result = $req->execute([
   // ":pseudo" => $_GET['pseudo']
//]);



function test($leGetPseudo) {
    $db = connexion_BD();
    $sql = "SELECT * FROM users WHERE pseudo = :pseudo";
    $req = $db->prepare($sql);
    $result = $req -> execute([":pseudo" => $leGetPseudo]);
    $result = $req->fetchAll(PDO::FETCH_OBJ);
    return $result;
}

function list_users() {
    $db = connexion_BD();
    $sql = "SELECT * FROM users";
    $req = $db->prepare($sql);
    $result = $req -> execute();
    $result = $req->fetchAll(PDO::FETCH_OBJ);
    return $result;
}



    ?>