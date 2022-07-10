<?php
  $LesMateriels =null; 
  $unControleur->setTable ("materiels");
  $LesMateriels = $unControleur->selectAll();  
 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="vue/style/head.css">
	<link rel="stylesheet" type="text/css" href="vue/wlcm.css">

	<script src="https://kit.fontawesome.com/a58a04c1aa.js" crossorigin="anonymous"></script>
	<title>SA-ROILLE</title>
</head>

 
<body> 
<div class="container-nav">
	 
<div class="navbar">
          <diV class="logo">
         <img src="pictures/saroille.png">
           </diV>
	    <div class="BarreSearch">
         <input type="search-form" name="Rechercher"> <i class="fas fa-search"></i>
        </div>
       <div class="buttonNav">
        <ul>
             <li class="sing-in-up"><a href="index.php?page= 1"><i class="fas fa-info"></i><br></a></li>
             <li class="sing-in-up"><a href="index.php?page= 1"><i class="fas fa-shopping-bag"></i><br></a></li>
             <li class="sing-in-up"><a href="index.php?page= 1"><i class="fas fa-user-plus"></i><br></a></li>

        </ul>      
       </div>
     </div>

 <div class="menu">
  <ul>
    <li class="active"><a href="index.php?page=0">Acceuil</a></li>
    <li><a href="index.php?page=0">A propos</a></li>
    <li><a href="index.php?page=0">Partenaires</a></li>
    <li><a href="index.php?page0">Produits</a></li>
    <li><a href="index.php?page=0">Actualité</a></li>
     </ul> 
 </div>
</div>


<div class="home">
  <img src="pictures/home.png" class="home-img">

	<div class="text-home">
		<p>
			<h1>CHEZ NOUS VOTRE SATISFACTION EST NOTRE OBJECTIF !</h1>
		<span>Passez Vos Commandes En Un Clic<br>
			Et Faites Vous Livrer En Un Clien D'oeil
	 </p>
    </span>
	           <button>Explorez</button>	
	</div>
</div>

<section class='ContainerProd'>
     <?php
      foreach($LesMateriels as $unMateriels){
echo "
    <form method='POST'>
    <input type='hidden' name='idmateriels' value ='".$unMateriels['idmateriels']."'>
      <div class='Article'>
       <div class='ArtImg'>
           <img src='".$unMateriels['lien_img']."'>
       </div>
       <div class='ArtDetail'>
           <span class='nom'><h1>".$unMateriels['nom']."</h1></span>
           <span class='prix'>".$unMateriels['prix']." "."€</span>
           <span class='etoile'><i class='fas fa-star'></i>
                    <i class='fas fa-star'></i>
                    <i class='fas fa-star'></i> 
                    <i class='fas fa-star'></i>
                    <i class='fas fa-star-half-alt'></i></span>
           <span class='btnAjout'><button type='submit' name='Louer'>Louer</button></span>
       </div>
   </div> 
    </form>
    </div>";}
         if (isset($_POST['Louer'])){
           
           header('Location: index.php?page=1'); 

    }
      ?>
</section>

         


        <section class='ContainerTem'>
            <div class="temoin">
            	<div class="temoin-img t1"></div>
            	<h2>Paul</h2>
            	<i class="fas fa-quote-right"></i>
            	<div class="temoin-txt">
                <span>
                	Grace à Sa-roille mon planning se déroule à merveille, mes objectifs sont atteints, et le services est sans rupture.
                </span>
            	<span>
            	<i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>	
            	</span>
            </div>

            	
            </div>
            <div class="temoin">
            	<div class="temoin-img t2"></div>
            	<h2>David</h2>
            	<i class="fas fa-quote-right"></i>
            	<div class="temoin-txt">
            		<span>
                	Les matériels sont livrés à temps sans retard ni d'imprévue. Les Techniciens sont également pro actif et proffessionel.
                </span>
            	<span>
            	<i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>	
            	</span>
            	</div>
            	
            </div>
            <div class="temoin">
            	<div class="temoin-img t3"></div>
            	<h2>Juliette</h2>
            	<i class="fas fa-quote-right"></i>
            	<div class="temoin-txt">
            		<span>
                	Les Commandes se font de manière simple, rapide, fluide, et sécurisé. Tout ce dont les client ont besoins.
                </span>
            	<span>
            	<i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>	
            	</span>
            	</div>
            	
            </div>
        </section>

        <section class='ContainerPart'>
            <div><img src="pictures/part1.png"></div>
            <div><img src="pictures/part2.JPG"></div>
            <div><img src="pictures/part3.png"></div>
            <div><img src="pictures/part4.png"></div>
            <div><img src="pictures/part5.JPG"></div>
        </section>


   <footer>
   	 <section class='ContainerFoot'>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </section>
   </footer>



</body>
</html>