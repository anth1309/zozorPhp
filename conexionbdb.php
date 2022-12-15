<body>
    <main>
        <?php

        if (!isset($_SESSION['loguser'])) {

            include('./appelBdb.php');
            $sqlQuery = 'SELECT * FROM user';
            $recipesStatement = $dbZozor->prepare($sqlQuery);
            $recipesStatement->execute();
            $users = $recipesStatement->fetchAll();
            //var_dump($users);



            if (isset($_POST['identifiant']) && isset($_POST['password']) && isset($_POST['userInput'])) {
                foreach ($users as $user) {

                    // var_dump($user['password']);
                    // var_dump($user['email']);
                    // var_dump($user['user']);
                    if ($user['email'] === $_POST['identifiant'] && $user['passwords'] === $_POST['password'] && $user['user'] === ucfirst($_POST['userInput'])) {

                        $_SESSION['loguser'] = $user['user'];
                        var_dump($_SESSION['loguser']);
                    } else {
                        $errorIdentification = sprintf(
                            '%s Vos identifiants ne sont pas valident: %s n\'est pas votre adresse mail d\'inscription et/ou votre mot de passe est erroné',
                            $_POST['userInput'],
                            $_POST['identifiant'],

                        );
                    }
                }
            }
        ?>
            <?php if (!isset($_SESSION['loguser'])) :  ?>
                <form action='./zozor.php' method='post'>
                    <?php if (isset($errorIdentification)) : ?>
                        <div>
                            <?php print($errorIdentification) ?>
                        </div>
                    <?php endif; ?>
                    <div id="conexion">

                        <div>
                            <label for="userInput">Votre pseudo</label>
                            <input type="text" id="userInput" name="userInput">
                        </div>
                        <div>
                            <label for="identifiant">Votre identifiant</label>
                            <input type="email" id="identifiant" name="identifiant" placeholder="Votre e-mail d'inscription">
                        </div>
                        <div>
                            <label for="passworrd">Votre mot de passe</p></label>
                            <input type="password" id="password" name="password" placeholder="Votre mot de passe">
                        </div>

                        <div>
                            <button type='submit'>Se connecter</button>
                        </div>
                </form>
                <div>
                    <form action='./createUser.php' method='post'>
                        <button type='submit'>S'inscrire</button>
                    </form>
                </div>
                </div>
            <?php else : ?>
                <div id="messageAcceuil">
                    Bonjour <?php echo (htmlspecialchars($_SESSION['loguser'])) ?> bienvenue sur le site Zozor
                </div>

            <?php endif; ?>

            <!-- <?php print ucfirst($_POST['user1']) ?>-->

        <?php } ?>



    </main>

</body>