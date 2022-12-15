<?php

if (!isset($_SESSION['loguser'])) {
  header('Location: zozor.php');
}


?>

<head>
  <meta charset="utf-8">
  <title>zozor acceuil</title>
  <link rel="stylesheet" href="style-zozor.css">
</head>


<header>
  <?php include('header.php'); ?>
</header>

<a id="retourzozor" href="zozor.php">retour a zozor</a>
<h1>Bienvenu a l'acceuil</h1>

<img src="https://picsum.photos/1500/2000?random=1" />

<footer>
  <?php include('./footer.php'); ?>
</footer>