<!DOCTYPE html>
<html lang="fr">
 
    </head>
    <body>

       <?php 
            require ("php/html_part.php"); 
        ?>
        
    <h2>Événements</h2>

        <main>  
            <p> La vie de passionné passe également par de grands événements. Nous vous proposerons 
                de partir en groupe à différents événements (championnat de drift, 
                mondial de l’automobile,ect…). Quelques journées circuit seront réalisées ainsi 
                que des convois en direction de rassemblements et de championnats reconnus( clio cup, 
                GT2, mitjet, ect...) 
            </p>
 
        <div id= "class-container-galeries">
            <img id="slide-event" src="davyPmedia/event/event1.jpg" width="800">
            <button onclick="ChangeSlide('event', -1)"id="precedent">←</button>
            <button onclick="ChangeSlide('event', 1)" id="suivant">→</button>
        </div>
   
     </main>
<?php 

include 'php/footer_section.php' ?>


       <!--Script Bootstrap--> 
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
    </body>
</html>