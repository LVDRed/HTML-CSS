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
    if ( isset($_POST['nom']) ) {
        echo "<h1>Bienvenue ".$_POST['nom']." !</h1>";
		echo "<p>Votre message : ".$_POST['msg']."</p>";
		echo "<p>Votre langue : ".$_POST['langues']."</p>";
		$prefs = $_POST['pref'];
		echo "<p>Vos préférences : ".implode(" ",$prefs)."</p>";
    }
?>
</body>
</html>