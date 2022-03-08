<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="test_import.php" method="POST" enctype="multipart/form-data">
        <h2>import files</h2>
        <input type="file" name="file">
        <p><button type="submit">Importer</button></p>
    </form>
</body>
</html>

<?php 
    if (isset($_FILES['file'])){
        //stockage du chemin et nom temporaire du fichier importé 
        $tmpName = $_FILES['file']['tmp_name'];
        //stockage du nom de fichier (nom+extension, ex: monFichier.docx)
        $name = $_FILES['file']['name'];
        //stockage de la taille du fichier
        $size = $_FILES['file']['size'];
        //stockage erreurs (pb import, pb de droit, etc)
        $error = $_FILES['file']['error'];
        //déplacer le fichier  importé dans le bon dossier 
        $fichier = move_uploaded_file($tmpName, "./image/$name");

}

?>