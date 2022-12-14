<DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="text/css" href="normalize.css">
        <script src="https://kit.fontawesome.com/7a4c34e63c.js" crossorigin="anonymous"></script>
        <link rel="icon" type="image/x-icon" href="INES.png">
        <title>Contactez-moi</title>
    </head>
    <body>
        <header>
            <a href="index.html"><i class="fa-solid fa-arrow-left-long"></i></a>
            <h1 class="blue"> INES LMAHDI</h1>
        </header>
        <main>
            <div id="big-block">
                <h2 class="white"> Contactez-moi !</h2>
                <div id="block-1">
                    <form  id="formulaire" action="mailto:ines.lmahdi@gmail.com?subject=Demande de devis" name="envoi" method=POST enctype="text/plain">
                        <p>Nom : </p><input name="Nom  "size=50 maxlength=50><br>
                        <p>Prénom : </p><input name="Prénom "size=50 maxlength=50><br>
                        <p>E-mail : </p><input name="E-mail "size=50 maxlength=50><br>
                        <p>Entreprise (facultatif) : </p><input name="Entreprise "size=50 maxlength=50><br>
                        <p>Message : </p><textarea name="Message " cols="50" rows="10"></textarea><br>
                        <input class="btn-form" type="submit" value="Envoyer" name="Envoyer">
                        <input class="btn-form" type="reset" name="Submit" value="Effacer">
                    </form>
                    <?php
                    if(isset($_POST['message'])){
                        $retour = mail('ines.lmahdi@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From: webmaster@monsite.fr' . "\r\n" . 'Reply-to: ' . $_POST['email']);
        if($retour)
            echo '<p>Votre message a bien été envoyé.</p>';
                    }
                </div>
                <div id="block-2">
                    <div class="contact JeChercheUnDev">
                        <a href="https://jechercheundev.fr/leclub/">
                            <i>JeChercheUnDev.fr</i>
                        </a>
                    </div>
                    <div class="contact linkedin">
                        <a href="linkedin">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </div>
                    <div class="contact telephone">
                        <a href="tel:+33650066319">
                            <i class="fa-solid fa-mobile-screen-button"></i>
                        </a>
                    </div>
                    <div class="contact ">
                        <a href="mailto:ines.lmahdi@gmail.com">
                            <i class="fa-solid fa-envelope"></i>
                        </a>
                    </div>
                    <div class="contact malt">
                        <a href="https://www.malt.fr/dashboard/freelancer">
                            <i> Malt.fr</i>
                        </a>
                    </div>
                </div>
            </div>
        </main>
        <footer>
        </footer>
        <script src="contact.js"></script>
    </body>
</html>