<?php
//echo htmlspecialchars($_post['nom']); 

// if (!isset($_post['nom']) || !isset($_post['email']) ||  !isset($_post['message'])) {
//     print('Veuillez remplir tous les champs');
//     return;
// }
$nom = $_POST['nom'];
$email = $_POST['email'];
$message = $_POST['message'];

$retour = mail('acdf-ac.ccdf@hotmail.fr', 'Envoi depuis la page Contact', $_POST['message'], '');
if ($retour)
    echo '<p>Votre message a bien été envoyé.</p>';
else
    print 'rien'
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title> Demande de contact reçue</title>

</head>

<body>
    <main>
        <header>
            <?php include_once('heaser.php'); ?>
        </header>
        <a id="retourzozor" href="zozor.php">retour a zozor</a>
        <h1>Message bien reçu !</h1>

        <div class="card">

            <div>
                <h1>Rappel de vos informations</h1>
                <p><b>Votre nom </b> <?php print htmlspecialchars($nom); ?> </p>
                <!-- avec htmlspecialchars les characteres "balises" sont lu et pas appliqué -->
                <p><b>Email</b> : <?php echo htmlspecialchars($email); ?></p>
                <p><b>Message</b> : <?php echo htmlspecialchars($message); ?></p>
                <h2 id="cardh">Zozor compagnie vous remercie de votre demande</h2>

            </div>
        </div>
        </div>
        <footer>
            <?php include("./footer.php") ?>
        </footer>
    </main>
</body>

</html>