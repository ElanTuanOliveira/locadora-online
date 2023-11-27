<?php

require('lista.php');



?><!doctype html>
<head>
    <meta charset="utf-8">
	<title>Lista de clientes</title>
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
    Nome dos clientes  
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
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Data de Nascimento</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
 
  <?php foreach ($cliente_lista as $cliente): ?>
    <tr>
      <th scope="row"><?= $cliente['id']; ?></th>
      <td><?= $cliente['nome']; ?>  </td>
      <td><?= $cliente['email']; ?> </td>
      <td><?= $cliente['data_nascimento']; ?></td>
      <td>
      <a href="http://localhost/locadora-online/src/cliente/formulario.php?id=<?= $cliente['id']; ?>">Editar</a>
      <a href="http://localhost/locadora-online/src/cliente/lista.php?id=<?= $cliente['id']; ?>">Excluir</a>
      </td>
    </tr>

  <?php endforeach; ?> 
 
  </tbody>
  </table>   
 </ul>
 </div>

 
</body>
</html>


