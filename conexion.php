<body>
    <main>

        <?php

        $users = [
            [
                'user' => 'Jordan',
                'email' => 'jordan@gmail.com',
                'password' => '1234',
                'sexe' => 'homme',
                'age' => 34,
            ],
            [
                'user' => 'Isabelle',
                'email' => 'isabelle@gmail.com',
                'password' => '5678',
                'sexe' => 'femme',
                'age' => 45,
            ],
            [
                'user' => 'Valérie',
                'email' => 'valérie@gmail.com',
                'password' => '91011',
                'sexe' => 'femme',
                'age' => 25,
            ],
            [
                'user' => 'Peter',
                'email' => 'theboss@gmail.com',
                'password' => '1213',
                'sexe' => 'homme',
                'age' => 40,
            ],
        ];

        if (isset($_POST['identifiant']) && isset($_POST['password']) && isset($_POST['user1'])) {
            foreach ($users as $user) {

                if ($user['email'] === $_POST['identifiant'] && $user['password'] === $_POST['password']) {
                    $loguser = ['email' => $user['email'],];
                } else {
                    $errorIdentification = sprintf(
                        '%s Vos identifiants ne sont pas valident: %s n est pas votre adresse mail d\'inscription et/ou votre mot de passe est erroné',
                        $_POST['user1'],
                        $_POST['identifiant'],

                    );
                }
            }
        }
        ?>

        <?php if (!isset($loguser)) :  ?>
            <form action='./zozor.php' method='post'>
                <?php if (isset($errorIdentification)) : ?>
                    <div>
                        <?php print($errorIdentification) ?>
                    </div>
                <?php endif; ?>
                <div id="conexion">

                    <div>
                        <label for="user1">Votre pseudo</label>
                        <input type="text" id="user1" name="user1">
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
                Bonjour <?php print ucfirst($_POST['user1']) ?> bienvenue sur le site Zozor
            </div>

        <?php endif; ?>









    </main>

</body>