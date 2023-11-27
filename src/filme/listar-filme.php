<?php

require('listaFilme.php');



?><!doctype html>
<head>
    <meta charset="utf-8">
	<title>Lista de filmes</title>
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/styles.css" />
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
    Filmes  
    </h2>
    <br>
    <br> 
    <?php require ('../../components/menu.php');?>
    <br>
    <br> 
    </ul>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Filme</th>
      <th scope="col">Tipo do filme</th>
      <th scope="col">Data de lançamento</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
 
  <?php foreach ($filme_lista as $filme): ?>
    <tr>
      <th scope="row"><?= $filme['id']; ?></th>
      <td><?= $filme['nome_filme']; ?>  </td>
      <td><?= $filme['tipo_filme']; ?> </td>
      <td><?= $filme['data_filme']; ?></td>
      <td>
      <a href="http://localhost/locadora-online/src/filme/formulario-filme.php?id=<?= $filme['id']; ?>">Editar</a>
      <a href="http://localhost/locadora-online/src/filme/removerFilme.php?id=<?= $filme['id']; ?>">Excluir</a>
      </td>
    </tr>

  <?php endforeach; ?> 
 
  </tbody>
  </table>   
 </ul>
 </div>

 
</body>
</html>


