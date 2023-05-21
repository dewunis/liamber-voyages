<?php

require __DIR__ . "/../bootstrap.php";

if (isset($_POST["submit"]) and is_post()) {

  $username = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $message = $_POST["message"];

  $to = "contact@liamber-voyages.com";
  $subject = $message;

  $message = "Name: {$username} Email: {$email} Phone: {$phone}  Message: " . $message;

  // Always set content-type when sending HTML email
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  // More headers
  $headers .= 'From: contact@liamber-voyages.com';

  $mail = mail($to, $subject, $message, $headers);

  if ($mail) {
    echo "<script>alert('Mail Envoyé avec succès.');</script>";
  } else {
    echo "<script>alert('Mail non envoyé.');</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> Liamber Voyages | Contact </title>
  <link rel="stylesheet" href="style.css" />

  <!-- FAVICON -->
  <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="../favicon/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container">
    <span class="big-circle"></span>
    <img src="img/shape.png" class="square" alt="" />
    <div class="form">
      <div class="contact-info">
        <h3 class="title">Nous Contacter</h3>
        <p class="text">
          Utilisez notre formulaire de contact pour toute demande d'information ou contactez-nous directement
          en utilisant les coordonnées ci-dessous.
        </p>

        <div class="info">
          <div class="information">
            <img src="img/location.png" class="icon" alt="" />
            <p>Lomé, TOGO</p>
          </div>
          <div class="information">
            <img src="img/email.png" class="icon" alt="" />
            <p>contact@liamber-voyages.com</p>
          </div>
          <div class="information">
            <img src="img/phone.png" class="icon" alt="" />
            <p>(+228) 93 95 35 95 /(+228) 92 16 60 98</p>
          </div>
        </div>

        <div class="social-media">
          <p>Suivez-nous :</p>
          <div class="social-icons">
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="contact-form">
        <span class="circle one"></span>
        <span class="circle two"></span>

        <form action="" method="post" autocomplete="off">
          <h3 class="title">Nous contacter</h3>
          <div class="input-container">
            <input type="text" name="name" class="input" required />
            <label for="">Nom et Prénoms</label>
            <span>Nom et Prénoms</span>
          </div>
          <div class="input-container">
            <input type="email" name="email" class="input" required />
            <label for="">E-mail</label>
            <span>E-mail</span>
          </div>
          <div class="input-container">
            <input type="tel" name="phone" class="input" required />
            <label for="">Téléphone</label>
            <span>Téléphone</span>
          </div>
          <div class="input-container textarea">
            <textarea name="message" class="input" required></textarea>
            <label for="">Message</label>
            <span>Message</span>
          </div>
          <input type="submit" name="submit" value="Envoyer" class="btn" />
          <br><br>
          <a href="javascript:window.open('','_self').close();">
            <input type="button" value="Retour" class="btn">
          </a>
        </form>
      </div>
    </div>
  </div>

  <script src="app.js"></script>
</body>

</html>