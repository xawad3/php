<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="formulaire">
        <form action="" method="GET">
            <label for="pseudo">Pseudo:</label>
            <input type="text" id="pseudo" name="pseudo" required minlength="4" size="10">
            <input type="submit"></input>
        </form>
    </div>




</body>

<?php
include("testsession.php");
include("requette.php");



if (!empty($_GET['pseudo'])) {
    $onteste = test($_GET["pseudo"]);
    var_dump($onteste);
    echo "<p>Bonjour " . $onteste[0]->pseudo . " tonn mail est " . $onteste[0]->mail . "</p>";
} else {
    echo "Champs vides<br>";
}


$maVariable = list_users();
foreach($maVariable as $value) {
    echo "<ul><li>" .$value ->pseudo. "</li></ul>";
}

?>

</html>