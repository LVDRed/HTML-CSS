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
            if(isset($_POST['nom']) 
                && isset($_POST['mdp']))
            {
        echo "<h1> Bienvenue ".$_POST['nom'].", comment vas-tu?</h1>";
            }
    ?>
</body>
</html>