<?php require_once __DIR__."/bootstrap.php";?>

<?php partials("head" , ["css" => "css/style.css"]);?>
<?php partials("header");?>

<div class="heading" style="background:url(images/header-bg-1.png) no-repeat">
   <h1>à propos</h1>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="image">
      <img src="images/about-img.png" alt="">
   </div>

   <div class="content">
      <h3>pourquoi nous choisir?</h3>
      <p>
         En combinant l’expertise de nos consultants professionnels, les dernières technologies en matière de voyage, 
         nous fournissons à nos clients les services de voyage les plus efficaces, les plus rentables et les plus rationalisés.
         Vous vous sentez perdu, notre personnel est là vous pour guider dans les domaines suivants: la planification devos vols et de votre séjour, 
         la réservation et l’achat de billets d’avion, et les démarches administratifs en toutes connaissances de cause si nécessaire. 
        </p>
      <p>
         Nos agents se tiennent à votre disposition pour répondre à toutes vos questions.
         Nous nous engageons auprès de nos clients à leur offrir les meilleurs tarifs et les meilleures ressources sur le marché. 
         Cela signifie que pour être digne de la confiance de nos clients, notre agence s’engage à offrir un service exceptionnel et à une valeur exceptionnelle.
      </p>
      <div class="icons-container">
         <div class="icons">
            <i class="fas fa-map"></i>
            <span>top destinations</span>
         </div>
         <div class="icons">
            <i class="fas fa-hand-holding-usd"></i>
            <span>prix abordables</span>
         </div>
         <div class="icons">
            <i class="fas fa-headset"></i>
            <span>24/7 assistance</span>
         </div>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading-title">ils nous ont fait confiance</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Liamber Voyages a bien compris nos exigences, ils nous ont guidé et préparé un voyage que nous n'oublierons jamais, 
            la République Dominicaine restera gravé dans nos mémoires, un voyage magique, 
            nous recommandons cette agence qui sait exactement vous préparer un voyage sur mesure qui vous donnera une entière satisfaction.
            </p>
            <h3>john deo</h3>
            <span>Voyageur</span>
            <img src="images/pic-1.png" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Très satisfait de toute l'équipe de Liamber Voyages, de la conseillère qui nous a préparé le voyage, 
            à la conciergerie qui était toujours très réactive sur place, grâce à eux, 
            nous avons voyagé sereinement aux Etats-Unis. Nous recommandons vivement leurs services.
            </p>
            <h3>john deo</h3>
            <span>Voyageur</span>
            <img src="images/pic-2.png" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Liamber Voyages a su être à notre écoute et nous concocter un voyage sur mesure qui correspondait à nos envies et à nos besoins. Ils ont toujours été réactifs et on déniché des logements superbes.</p>
            <h3>john deo</h3>
            <span>Voyageur</span>
            <img src="images/pic-3.png" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Le site est très agréable, la navigation est facile.</p>
            <h3>john deo</h3>
            <span>Voyageur</span>
            <img src="images/pic-4.png" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Voyage en Égypte très satisfaisant. Ce voyage a été organisé par une conseillère très expérimentée.</p>
            <h3>john deo</h3>
            <span>Voyageur</span>
            <img src="images/pic-5.png" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Expérience parfaite. Tant au niveau des voyages proposés que du service après vente.</p>
            <h3>Anonyme</h3>
            <span>Voyageur</span>
            <img src="images/pic-6.png" alt="">
         </div>

      </div>

   </div>

</section>

<!-- reviews section ends -->















<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>liens rapides</h3>
         <a href="index.html"> <i class="fas fa-angle-right"></i> accueil</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> à propos</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> destinations</a>
         <a href="contact/contact.php" target="_blank"> <i class="fas fa-angle-right"></i> Nous contacter</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> réserver maintenant</a>
         <a href="others.php">autres domaines</a>
      </div>

      <!-- <div class="box">
         <h3>liens extra</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> F.A.Q</a>
         <a href="#"> <i class="fas fa-angle-right"></i> à propos de nous</a>
         <a href="#"> <i class="fas fa-angle-right"></i> politique de confidentialité</a>
         <a href="#"> <i class="fas fa-angle-right"></i> mentions légales</a>
      </div> -->

      <div class="box">
         <h3>contacts</h3>
         <a href="tel: +228-93953595"> <i class="fas fa-phone"></i> (+228) 93 95 35 95 </a>
         <a href="tel: +228-92166098"> <i class="fas fa-phone"></i> (+228) 92 16 60 98 </a>
         <a href="tel: +228-90371641"> <i class="fas fa-phone"></i> (+228) 90 37 16 41 </a>
         <a href="mailto:contact@liamber-voyages.com"> <i class="fas fa-envelope"></i> contact@liamber-voyages.com </a>
         <a href="#"> <i class="fas fa-map"></i> Lomé, TOGO</a>
      </div>

      <div class="box">
         <h3>Suivez nous</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit">
       © 2023 | Liamber Voyages | tous droits réservés | développé par <span><a href="https://www.linkedin.com/in/ruben-koffi-741517102/" target="_blank">Ruben KOFFI</a></span>
   </div>

</section>
<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>