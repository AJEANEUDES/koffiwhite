
<header>
  <div class="default-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-2">
          <div class="logo"> <a href="index.php"><label>GARAGE KOFFI WHITE</label></a> </div>
        </div>
        <div class="col-sm-9 col-md-10">
          <div class="header_info">
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
              <p class="uppercase_text">Pour obtenir un soutien, envoyez-nous un courrier : </p>
              <a href="mailto:info@example.com">koffiwhite@gmail.com</a> </div>
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
              <p class="uppercase_text">Service d'assistance téléphonique Appelez-nous : </p>
              <a href="tel:00228 90-XX-XX-XX">+228 90-XX-XX-XX</a> </div>
            <div class="social-follow">
              <ul>
                <li><a href="https://www.facebook.com/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                <li><a href="https://www.twitter.com/"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                <li><a href="https://www.whatsapp.com/"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                <li><a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              </ul>
            </div>
   <?php   if(strlen($_SESSION['login'])==0)
	{
?>
 <div class="login_btn"> <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Connexion / Enregistrement</a> </div>
<?php 
              }

else{

echo "Bienvenue sur le portail de l'achat et de la location de voitures de Koffi White";
 } ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Navigation -->

  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Basculer la naviguation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="header_wrap">
        <div class="user_login">
          <ul>
            <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i>
<?php
$email=$_SESSION['login'];
$sql ="SELECT FullName FROM tblusers WHERE EmailId=:email ";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
	{

	 echo htmlentities($result->FullName); }}?><i class="fa fa-angle-down" aria-hidden="true"></i></a>
              <ul class="dropdown-menu">
           <?php if($_SESSION['login']){?>
            <li><a href="profile.php">Paramètres du profil</a></li>
              <li><a href="update-password.php">Mettre à jour le mot de passe</a></li>
            <li><a href="my-booking.php">Ma Réservation</a></li>
            <li><a href="post-testimonial.php">Poster un témoignage</a></li>
          <li><a href="my-testimonials.php">Mon témoignage</a></li>
            <li><a href="logout.php">Déconnexion</a></li>
            <?php } else { ?>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Paramètres du profil</a></li>
              <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Mettre à jour le mot de passe</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Mettre à jour le mot de passe</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Poster un témoignage</a></li>
          <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Mon témoignage</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Déconnexion</a></li>
            <?php } ?>
          </ul>
            </li>
          </ul>
        </div>
        <div class="header_search">
          <div id="search_toggle"><i class="fa fa-search" aria-hidden="true"></i></div>
          <form action="#" method="get" id="header-search-form">
            <input type="text" placeholder="Search..." class="form-control">
            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
          </form>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Acceuil</a></li>
          <li><a href="page.php?type=aboutus">A propos de Nous</a></li>
          <li><a href="car-listing.php">Liste des véhicules</a>
          <li><a href="page.php?type=faqs">FAQs</a></li>
          <li><a href="contact-us.php">Nous contacter</a></li>
          <li><a href="cart.php"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
Mon Panier</a> </li>

        </ul>
      </div>
    </div>
  </nav>
  
  <!-- Navigation end -->

</header>
