<?php session_start() ?>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style-zozor.css">
  <title>contact</title>
</head>


<header>

  <?php include('header.php'); ?>
</header>
<!-- <div id="messageAcceuil">
  Bonjour <?php print ucfirst($_POST['user1']) ?> bienvenue sur le site Zozor
</div> -->
<a id="retourzozor" href="zozor.php">retour a zozor</a>


<div id="contact">
  <h1>Contactez-nous</h1>

  <form method="post" action="submit_formulaire.php" enctype="multipart/form-data">
    <!--permet d envoyer un fichier -->

    <p>
      Un problème, une question ? N’hésitez pas à utiliser ce formulaire <br>pour
      prendre contact avec nous !
    </p>
    <div>
      <label for="nom">Votre nom</label>
      <input type="text" id="nom" name="nom" placeholder="Martin" required />
    </div>
    <div>
      <label for="email">Votre e-mail</label>
      <input type="email" id="email" name="email" placeholder="monadresse@mail.com" />
    </div>
    <div>
      <label for="sujet">Quel est le sujet de votre message ?</label>
      <select name="sujet" id="sujet" required>
        <option value="" disabled selected hidden>
          Choisissez le sujet de votre message
        </option>
        <option value="probleme-compte">Problème avec mon compte</option>
        <option value="question-correction">
          Incompréhension de la correction
        </option>
        <option value="autre">Autre...</option>
      </select>
    </div>
    <div>
      <label for="message">Votre message</label>
      <textarea id="message" name="message" placeholder="Bonjour, je vous contacte car...." required></textarea>
    </div>
    <div>
      <label for="screenshot" class="form-label">Votre capture d'écran</label>
      <input type="file" class="form-control" id="screenshot" name="screenshot" />
    </div>
    <div>
      <button type="submit">Envoyer mon message</button>
    </div>
  </form>

</div>
<footer>
  <?php include('./footer.php'); ?>
</footer>