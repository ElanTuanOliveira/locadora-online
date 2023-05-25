<?php
require ('lista.php');

$nomes = ler(); 

?>


<!doctype html>
<head>
    <meta charset="utf-8">
	<title>Lista de clientes</title>
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
    
    
    <div class="container">
    
    <h2 style=" text-align: center;">
      Nome dos clientes  
    </h2>
    <br>
    <br> 
    <?php require ('components/menu.php');?>
    <br>
    <br>
    <ul class="list-group list-group-flush">
    <?php foreach($nomes as $nome){
        echo '<li class="list-group-item">'.$nome.'</li>'; 
    }?>
    </ul>
        
        
    </ul>
    </div>
</body>
</html>


