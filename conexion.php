<body>
    <main>

        <?php

        $users = [
            [
                'userI' => 'Jordan',
                'email' => 'jordan@gmail.com',
                'password' => '1234',
                'sexe' => 'homme',
                'age' => 34,
            ],
            [
                'userI' => 'Isabelle',
                'email' => 'isabelle@gmail.com',
                'password' => '5678',
                'sexe' => 'femme',
                'age' => 45,
            ],
            [
                'userI' => 'Valérie',
                'email' => 'valérie@gmail.com',
                'password' => '91011',
                'sexe' => 'femme',
                'age' => 25,
            ],
            [
                'userI' => 'Peter',
                'email' => 'theboss@gmail.com',
                'password' => '1213',
                'sexe' => 'homme',
                'age' => 40,
            ],
        ];

        if (isset($_POST['identifiant']) && isset($_POST['password']) && isset($_POST['userInput'])) {
            foreach ($users as $user) {


                if ($user['email'] === $_POST['identifiant'] && $user['password'] === $_POST['password'] && $user['userI'] === ucfirst($_POST['userInput'])) {

                    $_SESSION['loguser'] = $user['userI'];
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
                        <button type='submit'>Conexion</button>
                    </div>
                </div>
            </form>
        <?php else : ?>
            <div id="messageAcceuil">
                Bonjour <?php echo (htmlspecialchars($_SESSION['loguser'])) ?> bienvenue sur le site Zozor
            </div>

        <?php endif; ?>

        <!-- <?php print ucfirst($_POST['user1']) ?>-->





    </main>

</body>