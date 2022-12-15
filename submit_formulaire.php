<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $file = $_FILES['screenshot'];
    //var_dump($nom);



    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $retour = mail('acdf-ac.ccdf@hotmail.fr', 'Envoi depuis la page Contact', 'coucou', $headers);
    if ($retour)
        echo '<p>Votre message a bien été envoyé.</p>';
    else
        print 'rien';
}
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
            <?php include_once('header.php'); ?>
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