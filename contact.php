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
        <link rel="stylesheet" href="bootstrap.min.css">
        <script src="script.js" defer></script>
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
                à votre disposition. A bientôt</br></p>

                <p>La famille PA45 </p>
        </main>

        <div class="contact-container">
            <div class="contactPA45">
                <img src="davyPmedia/logopa45.jpg" width="80%" alt="logo passion auto 45">
            </div>
        <div class="formulaire-contact ">
            <div class="row">
                <form action="" method="post">
                    <div class="col-lg-8 col-md-9 col-sm-10">
                        <label for="name">Votre nom</label>
                        <input type="text" id="name" placeholder="Nom" name="name" required>
                    </div>
                    <div class="col-lg-8 col-md-9 col-sm-10">
                        <label for="email">Votre e-mail</label>
                        <input type="email" id="email" placeholder="Email" name="email" required>
                    </div>
                    <div class="col-lg-8 col-md-9 col-sm-10">
                        <label for="message">Votre Message</label>
                        <textarea id="message" name="message" placeholder="Message" maxlength="300" rows="6" cols="24" required>
                        </textarea>
                    </div>
                    <button id="bouton">button</button>
                        <button type="button" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>

        <!-- ATTENTION !!!!!! TRAVAILLER LE FORMULAIRE EN PHP  -->
<?php
// Vérifie si les champs ont été soumis
if (isset($_POST['name']) && isset($_POST['email']) && isset ($_POST ['message'])) 
{ 
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST ['message'];
       // exemple de validation
  if (empty($name) && empty($email) && empty ($message))
	{
      echo "Veuillez entrer votre nom, email et message";
	} 
	else 
	{
		echo "Votre message a  bien été envoyé. Nous revenons vers vous vers très rapidement";	   
	}
}
?> 

<?php 
include 'php/footer_section.php' ?>

        
      </body>
</html>
    
