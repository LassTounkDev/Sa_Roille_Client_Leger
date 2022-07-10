 <?php
	session_start();
	require_once("controleur/controleur.class.php"); 
	require_once("controleur/config_db.php"); 
	//instanciation de la classe Controleur
	$unControleur = new Controleur($serveur, $bdd, $user, $mdp);
?>

<!DOCTYPE html>
<html>
<head>
	<title>SA-ROILLE</title>
</head>
<body>


	<?php
    $page = 0;
        if(isset($_SESSION['email']) && isset($_GET['page']))  //si connecté && page existe
        {
            $page = $_GET['page'];
        } 
        else  if(isset($_SESSION['pseudo'])  && isset($_GET['page']))  //si connecté && page existe
		{
		$page = $_GET['page'];
		} 
        else if (isset($_GET['page']))  //si pas connecté et page existe
        {
            $page = $_GET['page'];
            switch($page)
            {
                case 0:
                    $page = 0;
                    break;

                case 1:
                    $page = 1;
                    break;

                    case "@d_m1n$@roill£2$$":
					$page = "@d_m1n$@roill£2$$";
					break;

					 case "@tech$@roill£2$$":
					$page = "@tech$@roill£2$$";
					break;

                default:
                    $page = -1;
                    break;
            }
        }

        else
        {
            $page = 0;
        }


		switch($page){
			case "@d_m1n$@roill£2$$" : require_once("vue/Autentadmin.php");
			         break;
			case "@tech$@roill£2$$" : require_once("vue/AuthentTech.php");
			         break;
			
			case 1 : require_once("vue/vue_connexion.php");	

					 break;
			case 2 :  require_once("vue/home.php");
			          break;
			case 3 :  require_once("deconnexion.php");
			          break;
			case 4 : require_once("vue/dashboard.php");
			          break;
			case 5 : require_once("vue/touslesmat.php");
                      break;
			case 6 :  require_once("vue/touslesUsers.php");
			          break;
			case 7 : require_once("vue/insertOutils.php");
			          break;			
			case 8 : require_once("vue/insertVehicule.php");
			          break;
			case 9 : require_once("vue/touslesTech.php");
			          break;
			case 10 : require_once("vue/panier.php");
			          break;
			case 11 : require_once("vue/profile.php");
			          break;
			case 12 : require_once("vue/Adminprof.php");
			          break;
		     case 13 : require_once("vue/vueTechnicien.php");
			          break;
			 case 14 : require_once("vue/insertTech.php");
			            break;
			 case 15 : require_once("vue/tousleslocation.php");
			          break;
			 case 16 : require_once("vue/profileTech.php");
			          break;
			 case 17 : require_once("vue/insertVehicule.php");
			            break;
			 
			case 0 : require_once("welcome.php");
					 break;
			default : require_once("erreur.php"); 	
					 break;
	     }
	
        
	?>

	


</body>
</html>

		




 