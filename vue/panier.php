<?php
    if (isset($_SESSION['iduser'])) {
    $unControleur->setTable("VuePanier");
    $where = array("iduser"=>$_SESSION['iduser']);
    $LesPaniers = $unControleur->selectAllByPanier($where);
    }
    $unControleur->setTable("panier");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="vue/panierr.css">
    <link rel="stylesheet" type="text/css" href="vue/adresseLivraison.css">
	<script src="https://kit.fontawesome.com/a58a04c1aa.js" crossorigin="anonymous"></script>
	<title>SA-ROILLE</title>
</head>
<body>

   <?php  
        if (isset($_POST['sup'])) {
    $where =array("idmateriels"=>$_POST["idmateriels"]);
    $unControleur->delete($where); 
    header("Location: index.php?page=%2010");
} 
require_once("vue/header.php");
      ?>


 <section class='ContainerPanier'>

            <div class="ArtDetail">
            	  <?php
                     $quantite=0;
                     $total = 0;
                     $tableau = array();
      foreach($LesPaniers as $unPanier){
        $quantite=$quantite+1;
echo " 
            	<div class='Art'>
            		<div class='ArtImg'><img src='".$unPanier['lien_img']."'></div>
            		<div class='info'>
            			<span class='ArtAc'>
                     <span>".$unPanier['produit']."</span>

            				<form method='POST'>
                             <input type='hidden' name='idpanier' value ='".$unPanier['idpanier']."'>
                              <input type='hidden' name='idmateriels' value ='".$unPanier['idmateriels']."'>
                              <input type='hidden' name='idpanier' value ='".$unPanier['idpanier']."'>
                        <span>
                              <button type='submit' name='sup' action='sup'>   
                              <i class='fas fa-trash-alt'></i>
                              </button>
                              </span>
                              
            			</span>

            			<span>".$unPanier['prix']."  "."€</span>
            			
                        <span>Qantité <input type='number' name='quantite' value='1'></span>
                        
            		</div>
            	</div>";
                
                $total = $unPanier['prix']+$total;
                $tableau[$unPanier['idmateriels']] = $unPanier['idmateriels'];
            }?>
            </div>

            <div class="ArtTotal">
            	
            	<div class="SousTot">
            		<span class="Ttot"><h1>TOTAL</h1></span>
            		<span class="SousST">
            			<span><h4>Nombre Produit</h4></span>
            			<span>

                           <?php
                               echo $quantite;
                           ?>
 
                         </span>
            		     </span>
            	</div>

            	<div class="ArtPaie">
            		<span><h1>Prix Total</h1></span>
                    <span><h1>  <?php echo $total." "."€";?></h1></span>
            		<span class="Icon">
            			<span> <i class="fas fa-credit-card"></i><br>Carte Credit</span>
            			<span><i class="fab fa-cc-visa"></i><br>Carte Visa</span>
            			<span><i class="fab fa-cc-paypal"></i><br>PayPal</span>
            			<span><i class="fab fa-cc-apple-pay"></i><br>Apple Pay</span>
            		</span>
            	</div>
            </div>
 </section>
 
 <?php
    //vérification dans la base 
            $chaine ="*"; 
            $where =array("iduser"=>$_SESSION['iduser']);
            $unControleur->setTable ("user"); 
            $unUser = $unControleur->selectWhere($chaine, $where); 
?>

<?php
// Return current date from the remote server
$date = date('d-m-y h:i:s');
?>
  <section class='ContainerDateLoc'>
    
         <div class="datedebut">
            <label for="datedebut">DATE DEBUT</label>
            <input type="date" name ="datedebut" value="<?php echo date("Y-m-d"); ?>">
        </div>
         <div class="datefin">
            <label for="datefin">DATE FIN</label>
            <input type="date" name="datefin" id="datefin">
        </div>
      

        </section>
        <section class="ContainerProfile">
    <center><h2>Adresse De Livraison</h2></center>
    <div class="InfoProf">
    <form method="POST">
            <div>
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" value=<?php echo
                $unUser["nom"]?> >
                <i class="fas fa-pen"></i>
        </div>
            <div>
                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" id="prenom"  value=<?php echo
                $unUser["prenom"]?>>
                <i class="fas fa-pen"></i>
        </div>
            <div>
                <label for="adresse">Adresse</label>
                <input type="text" name="adresse" id="adresse"  value='<?php echo
                $unUser["adresse"]?>'>
                <i class="fas fa-pen"></i>
        </div>
            <div>
                <label for="cp">Code Postale</label>
                <input type="number" name="cp" id="cp"  value= <?php echo
                $unUser["cp"]?>>
                <i class="fas fa-pen"></i>
        </div>
            <div>
                <label for="ville">Ville</label>
                <input type="text" name="ville" id="ville"  value=<?php echo
                $unUser["ville"]?> >
                <i class="fas fa-pen"></i>
        </div>
            <div>
                <label for="email">Email</label>
                <input type="text" name="email" id="email"  value=<?php echo
                $unUser["email"]?> >
                <i class="fas fa-pen"></i>
        </div>
            <div>
                <label for="tel">Téléphone</label>
                <input type="text" name="tel" id="tel"  value=<?php echo
                $unUser["tel"]?>>
                <i class="fas fa-pen"></i>
            </div>

        <div><button type="submit" name="Confirmer">Confirmer</button></div>
        </form>
    </div>
</section>
  <?php 
                    if (isset($_POST['Confirmer'])) {
                       
                        foreach($tableau as $unTableau) {
                            $unControleur->setTable("location");
                            $tab = array(
                                "idpanier"=>$unPanier['idpanier'],
                                "idmateriels"=>$unTableau,
                                "iduser"=>$unUser['iduser'],
                                "datedebut"=>$_POST['datedebut'],
                                "datefin"=>$_POST['datefin']
                            );
                            $unControleur->insert($tab);



                        } 
                            
                    }

                     ?>


</body>
</html>