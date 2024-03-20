<!doctype html>
<html lang="en">

<head>
    <title>Connexion</title>
</head>

<body>
    <div class="container py-2">
        <?php
        if (isset($_POST['connexion_prof'])) {
            $email = $_POST['email'];
            $pwd   = $_POST['password'];

            if (!empty($email) && !empty($pwd)) {
                require_once 'include/database.php';
                $sqlState = $pdo->prepare('SELECT * FROM prof
                                                WHERE email=?
                                                AND   password=?');
                $sqlState->execute([$email, $pwd]);
                var_dump($sqlState->errorInfo());
                if ($sqlState->rowCount() >= 1) {
                    $_SESSION['prof'] = $sqlState->fetch();
                    header('location: admin.php');
                } else {
        ?>
                    <div class="alert alert-danger" role="alert">
                        Login ou password incorrectes.
                    </div>
                <?php
                }
            } else {
                ?>
                <div class="alert alert-danger" role="alert">
                    Login , password sont obligatoires
                </div>
        <?php
            }
        }
        ?>
        <h4>Connexion</h4>
        <form method="post">
            <label class="form-label">Email:</label>
            <input type="text" class="form-control" name="email"><br>

            <label class="form-label">Mot de passe</label>
            <input type="password" class="form-control" name="password">

            <input type="submit" value="Connexion" class="btn btn-primary my-2" name="connexion_prof">
        </form>
    </div>
</body>

</html>