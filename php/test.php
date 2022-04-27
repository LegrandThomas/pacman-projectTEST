
   <?php
    $n = $_GET['nom'];
    $a = $_GET['prenom'];
    ?>



<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>
Test Formulaire PHP
</title>
</head>
<body>

<h1>Bonjour, votre nom est : <?php echo $_GET['nom'] ?></h1>
<h2> et votre prénom est :  <?php echo $_GET['prenom'] ?></h2>

</body>

</html>