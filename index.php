<!DOCTYPE html>
<html lang="fr">

    <body>
         <?php require ("php/html_part.php"); ?>
        
        <main>
            <div id= "class-container-galeries">
                <img id="slide-accueil" src="davyPmedia/rasso1.jpg" width="800">
                <button onclick="ChangeSlide('accueil', -1)" id="precedent">←</button>
                <button onclick="ChangeSlide('accueil', 1)" id="suivant">→</button>
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
                     <a href="contact-save.php">cliquez ici</a></p>
                </div>
                

                <h3><a href="rasso.php">Rassemblements</h3>
                <section id="rasso-section">
                <div class= "rasso">
                        <img src="davyPmedia/rasso/rasso4.jpg" 
                        width="450vw" alt="Subaru"></a>
                </div>
                        <p>Au fil de l’année, différents rassemblements seront effectués en région Centre Val de Loire. 
                            Sans thème, l’entrée sur les rassemblements sera gratuite pour les visiteurs et 
                            exposants. Le lieux idéal pour partager et échanger autour de notre passion commune. 
                            Des encadrants et reponsables seront présents. 
                            Néanmoins le respect est de mise ! Nous comptons sur la reponsabilité de chacun d'entre vous 
                            que cela soit visiteur ou exposant pour contribuer à faire de ses rassemblemments des lieux surs,
                            sécuritaires et respecteux afin de profiter pleinement de ces moments de partage.
                        </p>
                </section>

                <h3><a href="evenements.php">Événements</h3>
                <section id="evenements-section">
                    <div class="image">
                        <img src="davyPmedia/event/event8.jpg" 
                        width="450vw" alt="Stand"></a>
                    </div>
                    <p>A pa45, vous pourrez égalements participer à des évènements. Que ce soit en France et même
                        dans plusieurs pays européens afin rouler sur circuits, admirer des compétitions de Drift, 
                        découvrir des rassemblements hors frontière. Parcourir des kilomètres en convois et continuer à partager 
                        notre passion de l'automobile 

                    </p>
                </section>

                <h3><a href="rollingshoot.php">Rolling Shot</h3>
                <section id="rollingshoot-section">
                    <div class="image">
                        <img src="davyPmedia/rollingShoot/shoot8.jpg"
                        width="450vw" alt="2 coccinelles"></a>
                    </div>   
                        <p> Le rolling shot est une balade à étape accompagnée d’un shooting 
                            photo/vidéo optionnel de votre véhicule à l’arrière du peloton. 
                            Certaines balades seront effectuées en partenariat avec d’autres groupes.
                        </p> 
                </section>


         </main>
            <?php 
            require ("php/html_footer.php"); 
        ?>

    </body>
</html>