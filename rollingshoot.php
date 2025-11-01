<!DOCTYPE html>
<html lang="fr">

    <body>

      <?php 
      require ("php/html_part.php"); 
      ?>

        <h2>RollingShot</h2>

        <main>
            <p> Le rolling shot a été proposé par notre photographe Davy-p Media afin d’effectuer 
                une balade sur nos belles routes de Centre Val de Loire. Lors du trajet entre les 
                différentes étapes, Davy proposera ses services de vidéaste et photographe en 
                queue de peloton. 
                Le tarif d’entrée sera défini en fonction des étapes et des animations. 
                Quelques photos vous seront offertes à la suite de la balade. 
            </p>
  
        <div id= "class-container-galeries">
            <img id="slide-shoot" src="davyPmedia/rollingShoot/shoot1.jpg" width="800">
            <button onclick="ChangeSlide('shoot', -1)"id="precedent">←</button>
            <button onclick="ChangeSlide('shoot', 1)" id="suivant">→</button>
        </div>
    </main>
    
<?php 

include 'php/footer_section.php' ?>


       <!--Script Bootstrap--> 
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
    </body>
</html>