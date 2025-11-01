<!DOCTYPE html>
<html lang="fr">

  <body>

     <?php 
            require ("php/html_part.php"); 
        ?>
      
  <h2>Rassemblements</h2>

   <main>

    <p> Propriétaire de véhicules sportifs, atypiques, customisés, préparés ou bien même visiteur, 
        venez profiter de l’ambiance d’un bon rassemblement entouré de passionnés. La diversité est
        notre mot d’ordre sur les rassemblements. 
        Nous vous demandons d’être respectueux du lieu et des autres passionnés ainsi que de leurs projets.
        Une équipe STAFF sera présente sur chaque événement afin d’assurer le bon déroulement et la 
        sécurité de tous.
    </p>

    <div id= "class-container-galeries">
        <img id="slide-rasso" src="davyPmedia/rasso/rasso1.jpg" width="800">
        <button onclick="ChangeSlide('rasso', -1)"id="precedent">←</button>
        <button onclick="ChangeSlide('rasso', 1)" id="suivant">→</button>
    </div>
</main>


<?php 
include 'php/footer_section.php' ?>

    </body>
</html>