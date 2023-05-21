<?php require_once __DIR__."/bootstrap.php";?>
<?php 

$pdo = pdo();

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$address = $_POST["address"];

?>



<?php partials("head" , ["css" => "css/style.css"]);?>
<?php partials("header");?>


<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>réserver maintenant</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">Plannifier votre voyage!</h1>

   <form action="reservation_data.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>nom :</span>
            <input type="text" placeholder="entrer votre nom" name="name" required>
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="entrer votre email" name="email" required>
         </div>
         <div class="inputBox">
            <span>téléphone :</span>
            <input type="number" placeholder="entrer votre numéro" name="phone" required>
         </div>
         <div class="inputBox">
            <span>addresse :</span>
            <input type="text" placeholder="entrer votre addresse" name="address" required>
         </div>
         <div class="inputBox">
            <span>destination :</span>
            <input type="text" placeholder="l'endroit que vous souhaiter visiter" name="location" required>
         </div>
         <div class="inputBox">
            <span>combien de personnes :</span>
            <input type="number" placeholder="nombre d'invités" name="guests" required>
         </div>
         <div class="inputBox">
            <span>arrivée :</span>
            <input type="date" name="arrivals" required>
         </div>
         <div class="inputBox">
            <span>départ :</span>
            <input type="date" name="leaving" required>
         </div>
      </div>

      <input type="submit" value="Envoyer" class="btn" name="send">

   </form>

</section>

<!-- booking section ends -->


<?php partials("footer",["js" => "js/script.js"])  ?>

</body>
</html>