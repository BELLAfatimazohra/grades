<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Prof</title>
</head>

<body>
    <div>
        <h4>Ajouter prof</h4>
        <?php
        if (isset($_POST['ajouter_prof'])) {
            $pwd = $_POST['password'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = strtolower($prenom . '.' . $nom . '@etu.uae.ac.ma'); // Génération de l'e-mail
            $num_tele = $_POST['num_telephone'];

            if (!empty($pwd)  && !empty($nom) && !empty($prenom) && !empty($num_tele)) {
                require_once 'include/database.php';
                $date = date('Y-m-d');
                $sqlState = $pdo->prepare('INSERT INTO prof  VALUES(null,?,?,?,?,?,?)');
                $sqlState->execute([$nom, $prenom, $date, $email, $pwd, $num_tele]);
                // Redirection
                //header('location: connexion.php');
            } else {
        ?>
                <div class="alert alert-danger" role="alert">
                    Login , password sont obligatoires
                </div>
        <?php
            }
        }
        ?>
        <form method="post" autocomplete="off" onsubmit="return verifierMotDePasse();">
            <label class="form-label">Nom:</label>
            <input type="text" class="form-control" name="nom"><br>

            <label class="form-label">Prenom:</label>
            <input type="text" class="form-control" name="prenom"><br>


            <label class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="mot_de_passe" name="password"><br>

            <label class="form-label">Confirmer votre mot de passe</label>
            <input type="password" class="form-control" id="confirmation_mot_de_passe" name="passworddd"><br>

            <label class="form-label">Num de telephone</label>
            <input type="text" class="form-control" name="num_telephone"><br>

            <input type="submit" value="Ajouter prof" class="btn btn-primary my-2" name="ajouter_prof">
            <div id="message_erreur" style="color: red;"></div>
        </form>
    </div>
    <script>
    // Fonction pour vérifier si les mots de passe sont identiques
    function verifierMotDePasse() {
        var motDePasse = document.getElementById("mot_de_passe").value;
        var confirmationMotDePasse = document.getElementById("confirmation_mot_de_passe").value;

        if (motDePasse != confirmationMotDePasse) {
            // Afficher un message d'erreur
            document.getElementById("message_erreur").innerHTML = "Les mots de passe ne correspondent pas.";
            return false; // Annuler la soumission du formulaire
        }

        return true; // Continuer avec la soumission du formulaire
    }
</script>
</body>

</html>