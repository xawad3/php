<?php

require('../models/bdd.php');
include('../views/vue_login.php');
include('../models/user.php');

    /**
     * login
     */

    if (
        isset($_POST['mail'])
        && isset($_POST['password'])
    ) {
        $mail = $_POST['mail'];
        $password = $_POST['password'];
        $myUser = new User();
        $myUser->mail = $mail;


        $req = $myUser->getSingleUser();
        while ($donnees = $req->fetch()) {
            // je vérifie le nombre de tuple en retour
            $nbrLignesRetournees = $req->rowCount();
            // si aucune tuple donc le mail est inexistant
            if ($nbrLignesRetournees == 0) {
                echo "<h5>Erreur de mail</h5>";
            } else {
                //je vérifie mon mdp
                if (password_verify($password, $donnees['password'])) {
                    // avec session
                    session_start();
                    //stockage donnees dans la session
                    $_SESSION['name'] = $donnees['name'];
                    $_SESSION['first_name'] = $donnees['first_name'];
                    $_SESSION['mail'] = $donnees['mail'];
                    $_SESSION['id_role'] = $donnees['id_role'];
                    $_SESSION['name_role'] = $donnees['name_role'];
                    echo '<p>Bonjour :
                        <h4>' . $_SESSION['name'] . ' ' . $_SESSION['first_name'] . '</h4>
                        </p>';
                } else {
                    echo "<p>Erreur de mot de passe</p>";
                }
            }
        }
    }

    ?>