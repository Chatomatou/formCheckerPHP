<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Formulaire verification PHP 7</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Formulaire PHP 7</h1>

        <form method="POST" action="send.php">
            <fieldset>
                <p>
                <label for="user">Nom d'utilisateur</label> 
                <input id="user" type="text" placeholder="Nom d'utilisateur" name="form_id"> 
                <label for="pass">Mot de passe</label>
                <input id="pass" type="password" placeholder="Mot de passe" name="form_pass"> 
                <input type="submit" value="Se connecter">
            </fieldset>
        </form>
    </body>
</html>