<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style-zozor.css">
    <title>creation compte</title>
</head>
<header>

    <?php include('./header.php'); ?>
</header>
<a id="retourzozor" href="zozor.php">retour a zozor</a>


<?php
include('./appelBdb.php');
//Verification du formulaire d inscription


if (empty($_POST['userCreate']) || empty($_POST['emailCreate']) || empty($_POST['passwordCreate']) || empty($_POST['sexeCreate']) || empty($_POST['ageCreate'])) {

    print "Veuillez remplir tous les champs";
    return;
}
//insertion dans la base

//creation des variables
$userCreate = $_POST['userCreate'];
$emailCreate = $_POST['emailCreate'];
$passwordCreate = $_POST['passwordCreate'];
$sexeCreate = $_POST['sexeCreate'];
$ageCreate = $_POST['ageCreate'];
var_dump($ageCreate);
//Insertion dans la BDB
$insertUser = $dbZozor->prepare('INSERT INTO user( user, email, passwords, sexe, birth) VALUES( :user, :email, :passwords ,:sexe ,:birth )');
$insertUser->execute([
    'user' => $userCreate,
    'email' => $emailCreate,
    'passwords' => $passwordCreate,
    'sexe' => $sexeCreate,
    'birth' => $ageCreate,
]);
?>

<footer>
    <?php include('./footer.php'); ?>
</footer>