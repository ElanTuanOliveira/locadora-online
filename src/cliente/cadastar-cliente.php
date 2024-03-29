
<?php

require ('cadastro.php');


?><!doctype html>
<head>
    <meta charset="utf-8">
	<title>Cadastro de clientes</title>
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
        <h2>Cadastrar o cliente</h2>
        <br> 
        <br>  
        <?php require ('../../components/menu.php');?>
        <br>
        <br>
        <br>
        <div id="cadastro" class="row" >
            <form  name="signup" method="post" action="cadastro.php">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        aria-describedby="nomeHelp" 
                        name="nome" 
                        required 
                        placeholder="Nome do cliente" 
                        id="nome"                        
                    />
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail:</label>
                    <input 
                        type="email" 
                        class="form-control"
                        aria-describedby="emailHelp" 
                        name="email" 
                        required 
                        placeholder="E-mail do cliente" 
                        id="email"                        
                    />
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Data de nascimento:</label>
                    <input 
                        type="date" 
                        class="form-control" 
                        aria-describedby="dataHelp" 
                        name="data" 
                        required 
                        placeholder="data de nascimento" 
                        id="data"  
                    />
                </div>

                <input class="btn btn-primary" type="submit" value="Cadastrar" >
                <a href="index.php"><button type="button" class="btn btn-secondary" >Voltar</button></a>
            </form>
        </div>
    </div>
    
	
</body>
</html>

