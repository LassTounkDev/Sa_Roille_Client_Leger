<?php
  $TotaleStkc =null; 
  $unControleur->setTable ("materiels");
  $TotaleStkc = $unControleur->showCountTables();  

  $TotaleUser =null; 
  $unControleur->setTable ("user");
  $TotaleUser = $unControleur->showCountTables();

  $TotaleLoc =null; 
  $unControleur->setTable ("location");
  $TotaleLoc = $unControleur->showCountTables();

  $TotaleTech =null; 
  $unControleur->setTable ("technicien");
  $TotaleTech = $unControleur->showCountTables();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
	<link rel="stylesheet" type="text/css" href="vue/style/dashboard.css">
    <script src="https://kit.fontawesome.com/a58a04c1aa.js" crossorigin="anonymous"></script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<title>SA-ROILLE</title>
</head>
<body>

<section class='ContainerHD'>



           <div class="container-nav">
     <img src="pictures/saroille.png">

<div class="admin"><h1> ADMIN DASHBOARD</h1></div>


    <div class="navplus">
          <a href="index.php?page=12"><i class="fas fa-user"></i><br></a>
          <a href="index.php?page=3"><i class="fas fa-sign-in-alt"></i><br></a>
     </div>

</div>
 <form method="POST" class="tableControl">
    <table class="table table-striped">
      <tr>
        <td><button><a href="index.php?page=5">Gestion Matériels</button></td>
        <td><button><a href="index.php?page=6">Gestion Users</button></td>
        <td><button><a href="index.php?page=15">Gestion Locations</a></button></td>
      </tr>
   </table> 
 </form>
  
            <div class="ContainerTbord">
            	<div class="Tstock">
                <i class="fas fa-box"></i>
                <span>Total Stock</span>
   <?php echo
      "  <snpa>".$TotaleStkc."</span>";
      ?>
                </div>
            	<div class="Tuser">
                 <i class="fas fa-users"></i>
                <span>Total User</span>
                <?php echo
      "  <snpa>".$TotaleUser."</span>";
      ?>   
                </div>
            	<div class="Tloc">
                 <i class="fas fa-cart-arrow-down"></i>
                <span>Total Location</span>
                <?php echo
      "  <snpa>".$TotaleLoc."</span>";
      ?>      
                </div>

                <div class="Ttech">
                 <i class="fas fa-user-cog"></i>
                <span>Total Techniciens</span>
                <?php echo
      "  <snpa>".$TotaleTech."</span>";
      ?>        
                </div>
            </div>
        </section>
 <canvas id="polar-chart" width="500" height="150"></canvas>      
<script type="text/javascript">
new Chart(document.getElementById("polar-chart"), {
    type: 'polarArea',
    data: {
      labels: ["Stock", "User",  "Location", "Technicien"],
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: ["#8e5ea2","#3e95cd","#f39c12","#888888"],
            <?php 
        echo"
        data: [".$TotaleStkc.",".$TotaleUser.",".$TotaleLoc.",".$TotaleTech."]
          "?>
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Statistique Des Données SA-ROILLE'
      }
    }
});
</script>
 </body>
</html>



