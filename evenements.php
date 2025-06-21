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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous">
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
                GT2, mitjet, ect...) </p>

      <div class="size">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="davyPmedia/driftShoot/driftBmw.jpg" class="d-block w-100" alt="Drift Bmw">
              </div>
              <div class="carousel-item">
                <img src="davyPmedia/driftShoot/driftGarage.jpg" class="d-block w-100" alt="Stand">
              </div>
              <div class="carousel-item">
                <img src="davyPmedia/driftShoot/driftS13.jpg" class="d-block w-100" alt="Drift s13">
              </div>
              <div class="carousel-item">
                <img src="davyPmedia/driftShoot/driftSilvia.jpg" class="d-block w-100" alt="Silvia">
              </div>
              <div class="carousel-item">
                <img src="davyPmedia/driftShoot/driftStandBmw.jpg" class="d-block w-100" alt="Stand Bmw">
              </div>
              <div class="carousel-item">
                <img src="davyPmedia/driftShoot/driftSupra.jpg" class="d-block w-100" alt="Supra">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
        </div>
      </div>
     </main>
<?php 

include 'php/footer_section.php' ?>


       <!--Script Bootstrap--> 
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
    </body>
</html>