<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <button id="crea">Créer un compte</button>
    <div id="crea1">
        <fieldset>
            <legend>Créer un compte</legend>
            <form action="register.php" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" size="10" required>
                <label for="name">Firstname:</label>
                <input type="text" id="firstname" name="firstname" size="10" required>
                <label for="mail">Mail:</label>
                <input type="text" id="mail" name="mail" size="10" required>
                <label for="name">password:</label>
                <input type="password" id="password" name="password" size="10" minlength="8" required>
                <select name="role" size="1" required>
                    <option value="">--Choisissez un rôle--</option>
                    <option value="1">administrateur
                    <option value="2">modérateur
                    <option value="3">membre
                </select>
                <button type="submit" name="sub">On y va</button>


            </form>
        </fieldset>
    </div>

    <button id="conex">Se connecter</button>
    <div id="conex1">
        <fieldset>
            <legend>Se Connecter</legend>
            <form action="index.php" method="POST">
                <label for="mail">Mail:</label>
                <input type="text" id="mail" name="mail" size="10" required>
                <label for="name">Password:</label>
                <input type="password" id="password" name="password" size="10" required>
                <input type="submit">

            </form>
        </fieldset>
    </div>


    <script src="script.js"></script>
</body>

</html>