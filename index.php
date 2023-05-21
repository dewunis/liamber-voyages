<?php require_once __DIR__."/bootstrap.php";?>

<?php partials("head" , ["css" => "css/style.css"]);?>

<?php partials("header");?>
   
<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
            <div class="content">
               <span>explorez, découvrez, voyagez</span>
               <h3>voyagez à travers le monde</h3>
               <a href="package.php" class="btn">découvrez plus</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
            <div class="content">
               <span>explorez, découvrez, voyagez</span>
               <h3>découvrez de nouveaux endroits</h3>
               <a href="package.php" class="btn">découvrez plus</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
            <div class="content">
               <span>explorez, découvrez, voyagez</span>
               <h3>rendez vos voyages intéressants</h3>
               <a href="package.php" class="btn">découvrez plus</a>
            </div>
         </div>
         
         <div class="swiper-slide slide" style="background:url(images/home-slide-4.jpg) no-repeat">
            <div class="content">
               <span>explorez, découvrez, voyagez</span>
               <h3>partez à l'aventure</h3>
               <a href="package.php" class="btn">découvrez plus</a>
            </div>
         </div>
         
         <div class="swiper-slide slide" style="background:url(images/home-slide-5.jpg) no-repeat">
            <div class="content">
               <span>explorez, découvrez, voyagez</span>
               <h3>découvrez de nouveaux paysages</h3>
               <a href="package.php" class="btn">découvrez plus</a>
            </div>
         </div>
         
         <div class="swiper-slide slide" style="background:url(images/home-slide-6.jpg) no-repeat">
            <div class="content">
               <span>explorez, découvrez, voyagez</span>
               <h3>explorez des endroits inédits</h3>
               <a href="package.php" class="btn">découvrez plus</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->





<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> Nos services </h1>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>Vente de billets d'avions</h3>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>Réservation de chambres d'hotels</h3>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>Location de voitures</h3>
      </div>

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>Activités touristiques</h3>
      </div>

      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>Trasfert d'argent</h3>
      </div>

      <!-- <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>camping</h3>
      </div> -->

   </div>

</section>

<!-- services section ends -->





<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/about-img.png" alt="">
   </div>

   <div class="content">
      <h3>à propos de nous</h3>
      <p>
         Nous sommes une agence de voyages spécialisée dans la vente de billets d’avion avec départ sur Lomé et route vers toutes autres destinations (Europe, Asie, Les Amériques).
      </p>
      <p>
         LIAMBER VOYAGES est une société de voyages mondiale proposant une gamme complète de solutions de voyage, y compris des voyages d’affaires, 
         des voyages de groupes, 
         ainsi que des services de voyages de vacances à savoir les réservations de chambres d’hôtel ou d'appartements, la location de véhicule, le transfert d’argent etc…
      </p>
      <a href="about.php" class="btn">lire plus</a>
   </div>

</section>

<!-- home about section ends -->





<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> Top Destinations </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/img-1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Emirates</h3>
            <p>
               Petit pays d’Asie composé de plusieurs états, les Émirats Arabes Unis offrent des panoramas inoubliables et futuristes entre luxe et authenticité. 
            </p>
            <a href="book.php" class="btn">Réserver</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Egypte</h3>
            <p>
               Pays mythique aux vestiges antiques, son histoire millénaire et ses paysages uniques laissent une empreinte à vie au voyageur qui a la chance de s'y rendre.
            </p>
            <a href="book.php" class="btn">Réserver</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/img-3.jpg" alt="">
         </div>
         <div class="content">
            <h3>Italie</h3>
            <p>
            Ce sont des paysages à couper le souffle, 
            des monuments époustouflants, la cuisine, internationalement réputée et un accueil chaleureux qui vous attendent. 
            </p>
            <a href="book.php" class="btn">Réserver</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="package.php" class="btn">charger plus</a> </div>

</section>

<!-- home packages section ends -->


<!-- home newsletter section  -->

<section class="home-offer">
   
   <div class="content">
      <h3>Newsletter</h3>
      <p>Abonnez-vous à notre newsletter pour ne rien rater!</p>
      <form action="">
         <input type="text" placeholder="Adresse mail...">
         <button type="submit" class="btn">Je m'abonne!</button>
     </form>
   </div>
</section>

<!-- home newsletter section ends -->

<?php partials("footer",["js" => "js/script.js"])  ?>




