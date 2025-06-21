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
        <link rel="stylesheet" href="slider.css">
        <script src="slider.js"></script>
        
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"> -->
    </head>
    <body>
        
        <?php 
            require ("php/html_part.php"); 
        ?>
        
        <main>
            <div id="class-container">
                <div id="slider"><img src="davyPmedia/rasso1.jpg" alt="image rasso" id="slide"></div>
                <div id="precedent" onclick="ChangeSlide(-1)">&lt;</div>
                <div id="suivant" onclick="ChangeSlide(1)">&gt;</div>
            </div>
            
             <h2 id="presentation">Qui sommes nous ?</h2> 

                <div id="intro">
                  <p>Issue à l’origine d’un groupe Facebook, l‘ association Passion Auto 45 a été créée 
                     afin de réunir les passionné(es)s sur des événements et rassemblements. Propriétaire de 
                     véhicules sportifs, atypiques, customisés, préparés ou bien même visiteur, soyez le 
                     bienvenu aux différentes activités du groupe.
                     En autonomie ou en collaboration, PA45 vous propose de nous rejoindre sur les rassemblements, 
                     balades, sorties circuits et sorties découvertes mécanique.
                     Un groupe Facebook de ventes dans le domaine automobile est disponible ( ventes de véhicules entre particulier, 
                     équipement , service).
                     Alors si vous souhaitez nous contacter,</br> 
                     <a href="contact.php">cliquez ici</a></p>
                </div>
                

            <div id="container">
                <section>
                <h3><a href="rasso.php">Rassemblements</h3>
                <div class="image">
                        <img src="davyPmedia/rasso/rassoSubaru.jpg" 
                        width="300vw" alt="Subaru"></a>
                </div>
                        <p>Au fil de l’année, différents rassemblements seront effectués en région Centre Val de Loire. 
                            Sans thème, l’entrée sur les rassemblements sera gratuite pour les visiteurs et 
                            exposants.<br>
                        </p>
                    
                </section>

                <section>
                    <h3><a href="evenements.php">Événements</h3>
                    <div class="image">
                        <img src="davyPmedia/driftShoot/driftStandBmw.jpg" 
                        width="300vw" alt="Stand"></a>
                    </div>
                        <p>Au fil de l’année quelques évènements seront effectués en groupe comme des sorties 
                            circuit, découvertes mécanique ou bien même convois vers d’autres événements. 
                        </p>
                </section>

                <section>
                    <h3><a href="rollingshoot.php">Rolling Shot</h3>
                    <div class="image">
                        <img src="davyPmedia/rollingShoot/rollingShootCocc.jpg"
                        width="300vw" alt="2 coccinelles"></a>
                    </div>   
                        <p> Le rolling shot est une balade à étape accompagnée d’un shooting 
                            photo/vidéo optionnel de votre véhicule à l’arrière du peloton. 
                            Certaines balades seront effectuées en partenariat avec d’autres groupes.
                        </p> 
                </section>
            </div>

         </main>
            <?php 
            require ("php/html_footer.php"); 
        ?>

    </body>
</html>