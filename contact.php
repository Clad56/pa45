<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <title>Passion Auto 45</title>
        <meta name="meta description" content="site Officiel Passion Auto 45">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="facebookurl" content="https://www.facebook.com/groups/147467578931462">
        <meta name="keyword" content="Automobile, Orléans, Loiret, Rassemblement">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="responsive_design.css">
        <script src="script.js" defer></script> 
        <script src="script-destination.js" defer></script> 
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"> -->
    </head>
    <body>

        <?php 
        require ("php/html_part.php"); 
        ?>
        
        <h1>Contact</h1>

        <main>
            <p> Si après avoir visité notre site, vous souhaitez prendre contact pour des informations 
                sur les rassemblements, les événements ou les rolling shots, le formulaire de contact est 
                à votre disposition. A bientôt</br> La famille PA45

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
                    <select type="text" name="objet" id="objet">
                        <option value="renseignement_rassemblement" selected>Renseignement rassemblement</option>
                        <option value="sorties_évenements">Sortie évènements</option>
                        <option value="autre">Autre</option>
                    </select>
                </div>

    

            <textarea name="message" id="message" cols="30" rows="10" placeholder="Message..." required></textarea>

            <!-- <button type="submit" id="bouton1">Envoyer</button> -->
        </fieldset>

        <div class="g-recaptcha" data-sitekey="6Ldv4GorAAAAALV4_9nAzEdCga_VgXL2vwSLcS4I"></div>
        <input type="submit" id="button" value="Envoyer">
    </form>
        <?php 
        require 'php/captchat_section.php' ?> 
</main>



   

        <!-- ATTENTION !!!!!! TRAVAILLER LE FORMULAIRE EN PHP  -->
<?php
// Vérifie si les champs ont été soumis
// if (isset($_POST['name']) && isset($_POST['email']) && isset ($_POST ['message'])) 
// { 
//   $name = $_POST['name'];
//   $email = $_POST['email'];
//   $message = $_POST ['message'];
//        // exemple de validation
//   if (empty($name) && empty($email) && empty ($message))
// 	{
//       echo "Veuillez entrer votre nom, email et message";
// 	} 
// 	else 
// 	{
// 		echo "Votre message a  bien été envoyé. Nous revenons vers vous vers très rapidement";	   
// 	}
// }
// ?> 

<?php 
include 'php/footer_section.php' ?>

        
      </body>
</html>
    
