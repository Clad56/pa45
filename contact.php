<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <title>Passion Auto 45</title>
        <meta name="description" content="site Officiel Passion Auto 45">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="facebookurl" content="https://www.facebook.com/groups/147467578931462">
        <meta name="keyword" content="Automobile, Orléans, Loiret, Rassemblement">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="responsive_design.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet">
        
        <script src="script.js" defer></script> 
        <script src="script-destination.js" defer></script> 
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    </head>
    <body>
        <div id="consent-banner">
            Ce site utilise le stockage local pour améliorer votre expérience.
            <button id="accept-cookies">Accepter</button>
        </div>

        <?php 
        require ("php/html_part.php"); 
        ?>
        
        <h1>Formulaire de contact</h1>

        <main>
            <p> Si après avoir visité notre site, vous souhaitez prendre contact pour des informations 
                sur les rassemblements, les événements ou les rolling shots, le formulaire de contact est 
                à votre disposition. A bientôt</br> La famille PA45</p>

            <form id="formulaire" action="/destination.php" method="post">
                <fieldset id="infos">
                    <legend><h2>Informations</h2></legend>

                        <div id="div_nm">
                            <label for="name">Nom :</label><input type="text" name="nom" id="name" placeholder="Votre nom ..." required>
                        </div>

                        <div id="div_fnm">
                            <label for="firstname">Prenom :</label><input type="text" name="prenom" id="firstname" placeholder="Votre prénom ..." required>
                        </div>

                         <div>
                <label for="email">Email :</label><input type="email" id="email" name="email" placeholder="email@mail.com" required>
                        </div>
                </fieldset>

                <fieldset id="messages">
                    <legend><h2>Message</h2></legend>

                <div>
                    <label for="objet">Objet du message:</label>
                    <select type="text" name="objet" id="objet" class="select-grand">
                        <option value="renseignement_rassemblement" selected>Renseignement rassemblement</option>
                        <option value="sorties_évenements">Sortie évènements</option>
                        <option value="autre">Autre</option>
                    </select>
                </div>

    

            <textarea name="message" id="message" cols="20" rows="10" placeholder="Message..." required></textarea>

        </fieldset>

        <div class="g-recaptcha" data-sitekey="6Ldv4GorAAAAALV4_9nAzEdCga_VgXL2vwSLcS4I"></div>
        <input type="submit" id="button" value="Envoyer">
    
        <?php 
        require 'php/captchat_section.php' ?> 
    </form>
</main>



   

        <!-- ATTENTION !!!!!! TRAVAILLER LE FORMULAIRE EN PHP  -->
<?php
// Vérifie si les champs ont été soumis
if (isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['message']))

{ 
  $name = $_POST['nom'];
  $email = $_POST['email'];
  $message = $_POST ['message'];
       // exemple de validation
  if (empty($name) || empty($email) || empty ($message))
	{
      echo "Veuillez entrer votre nom, email et message";
	} 
	else 
	{
		echo "Votre message a  bien été envoyé. Nous revenons vers vous très rapidement";	   
	}
}
?> 

<?php 
include 'php/footer_section.php' ?>

        
      </body>
</html>
    
