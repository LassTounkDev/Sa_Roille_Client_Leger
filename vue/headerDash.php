<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/a58a04c1aa.js" crossorigin="anonymous"></script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>SA-ROILLE</title>
</head>
<body>
<center>
<form method="POST">
    <button type="submit" name="vehicule">Nouveau Véhicule</button>
    <button type="submit" name="outil">Nouveau Outil</button>
 
 <?php  
          if (isset($_POST['vehicule']))
       {
          require_once('vue/home.php');

       } else if (isset($_POST['outil']))
       {
          require_once('vue/insertOutils.php');

       }  
      ?>
      </form>
</center>
  

 </body>
</html> 