<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php 
if (isset($POST_['sub'])){
    $username = $_POST['name'];
    $userfirstname = $_POST['firstname'];
    $email = $_POST['mail'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $role = $_POST['role'];
    }

    //connexion db
$bdd = $bdd = new PDO(
    'mysql:host=localhost;dbname=tplogregshow',
    'root',
    '',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
);

$bdd->exec("set names utf8");
try {
    //
    $req = $bdd->prepare(
        "INSERT INTO users SET 
                name = :name,
                first_name = :first_name,
                mail = :mail,
                password = :password,
                id_role = :role"
    );

    $resultat = $req->execute(
        array(
            ':name' => $name,
            ':first_name' => $first_name,
            ':mail' => $mail,
            ':password' => $password,
            ':role' => $role
        )
    );
/**
             *  partie 2 
             */
            // si resultat ok je fais ma connexion auto après l'enregistrement
            if ($resultat) {
                //ajout session
                session_start();
                $req = $bdd->prepare(
                    'SELECT * FROM users JOIN roles ON users.id_role = roles.id_role WHERE mail = :mail'
                );
                $req->execute(
                    array(
                        ':mail' => $mail
                    )
                );
                while ($donnees = $req->fetch()) {
                    // stockage des donnees dans super globale $_session
                    $_SESSION['name'] = $donnees['name'];
                    $_SESSION['first_name'] = $donnees['first_name'];
                    $_SESSION['mail'] = $donnees['mail'];
                    $_SESSION['id_role'] = $donnees['id_role'];
                    $_SESSION['name_role'] = $donnees['name_role'];
                }
                echo '<p>Bienvenue : <h4>' . $_SESSION['name'] . ' ' . $_SESSION['first_name'] . '</h4></p>';
            } else {
                echo "<p>Erreur lors de l'enregistrement</p>";
            }
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    
    ?>
    <form action="logOut.php" method="get">
        <input type="submit" value="se déconnecter">
    </form>
    <br>
    <form action="showAllUsers.php" method="get">
        <input type="submit" value="Voir les utilisateurs">
    </form>
</body>

</html>
