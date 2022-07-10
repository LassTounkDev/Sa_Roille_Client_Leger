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
  <link rel="stylesheet" type="text/css" href="vue/wlcm.css">
	<link rel="stylesheet" type="text/css" href="vue/homee.css">
	<script src="https://kit.fontawesome.com/a58a04c1aa.js" crossorigin="anonymous"></script>
	<title>Index</title>
</head>
<body>
<?php
require_once('header.php');
?>
<section class='ContainerHead'>
         
       <h1>SA-ROILLE</h1>     
</section>
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
            $chaine ="*";
            $where =array("idmateriels"=>$_POST["idmateriels"]);
            $unControleur->setTable ("panier"); 
            $unPanier = $unControleur->selectWhere($chaine, $where); 

            if (isset($unPanier['idmateriels'])){
                $_POST['idmateriels'] = $unPanier['idmateriels']; 
                //bienvenue en JS 
                echo "<script>alert ('Produit Déjà Sélectioné vous ne pouvez pas louer plus de un')</script>";

            }
            else{
        
              $tab = array(
            "idmateriels"=>$_POST["idmateriels"],
            "iduser"=>$_SESSION['iduser']
            );
             $unControleur->setTable ("panier");
              $unControleur->insert($tab); 
       } 
    }
      ?>
 
</section>

 <section class='ContainerIcon'>
            <div>
                <span><i class="fas fa-shipping-fast"></i></span>
                <span>Livraison Rapide</span>
            </div>
            <div>
                <span><i class="fas fa-thumbs-up"></i></span>
                <span>Qualité De Produit</span>
            </div>
            <div>
                <span><i class="fas fa-hand-holding-usd"></i></span>
                <span>Prix Abordable</span>
            </div>

             <div>
                <span><i class="fas fa-headset"></i></span>
                <span>24/7 Service Client</span>
            </div>
        </section>
</body>
</html>
