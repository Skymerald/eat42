<!DOCTYPE html>
<html lang="fr">
<body class="main-center-container">
<link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <div class="main center">
        <h1>Titre</h1 class="center">
        <h2>Form</h2 class="center">
        <form method="POST" action="process.php" >
            <table>
                <tr>
                    <th>
                        <h3>Choisissez votre (ou vos) language préféré</h3>
                    </th>
                    <th class="checkbox-container">
                        <div class="checkbox">
                            <input type="checkbox" name="html" value="html"/>
                            <label for="html">html</label>
                        </div>
                        
                        <div class="checkbox">
                            <input type="checkbox" name="css" value="css"/>
                            <label for="css">css</label>
                        </div>
                        
                        <div class="checkbox">
                            <input type="checkbox" name ="php" value="php"/>
                            <label for="php">php</label>
                        </div>
                        
                        <div class="checkbox">
                            <input type="checkbox" name="js" value="javascript"/>
                            <label for="js">javascript</label>
                        </div>
                        
                    </th>
                </tr>
                <tr>
                    <th>
                        <h3>
                            Date de naissance
                        </h3>
                    </th>
                    <th>
                        <input type="date"  />
                    </th>
                </tr>
                <tr>
                    <th>
                        <h3>Nom d'utilisateur</h3>
                    </th>
                    <th>
                        <input type="text" />
                    </th>
                </tr>
                <tr>
                    <th>
                        <h3>Mot de passe</h3>
                    </th>
                    <th>
                        <input type="password" />
                    </th>
                </tr>
            </table>
            <div class="right">
                <input type="submit" value="Valider" class="submit-btn"/>
            </div>
        </form>
    </div>
    <footer class="footer-menu">
        <?php include_once('navbar.html'); ?>
    </footer>
</body>
</html>