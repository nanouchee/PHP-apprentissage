<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="/css/bootstrap.min.css">

  <title> page test php </title>
</head>

<body>
  <?php include("./partial/_navBar.php"); ?>
  <div class="container">

    <h1>page test php </h1>


    <pre>
   résultat php 
   ===================================================
    



    <?php

    $tab = ["1","2", "3", "4", "5"];

    array_splice($tab, 2 , 1);
    var_dump($tab);

    ?>
    

  
    
    
    
    
    
    
    
    ===================================================

    </pre>










  </div>




  <script src="/js/bootstrap.bundle.min.js"></script>

</body>

</html>