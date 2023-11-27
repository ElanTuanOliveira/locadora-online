
<?php


require ('Filme.php');

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$filme = [
    'nome_filme' => '',
    'tipo_filme' => '',
    'data_filme' => ''

];

if($id !== false){

    $alterarFilmeFormularioClasse = new Filme;
    $filme = $alterarFilmeFormularioClasse->listarAlteracaoFilme($id);
    
}





?><!doctype html>
<head>
    <meta charset="utf-8">
	<title>Editar Filme</title>
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles.css" />
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
        <h2>Editar Filme</h2>
        <br> 
        <br>  
        <?php require ('../../components/menu.php');?>
        <br>
        <br>
        <br>
        <div id="cadastro" class="row" >
            <form  name="signup" method="post" action="<?= $id === false ? 'http://localhost/locadora-online/src/filme/cadastrar-filme.php' : 'http://localhost/locadora-online/src/filme/editarFilme.php?id=' . $id; ?>"
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome do Filme:</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        aria-describedby="nomeHelp" 
                        name="nome_filme" 
                        value="<?= $filme['nome_filme']; ?>"
                        required 
                        placeholder="Nome do filme" 
                        id="nome_filme"                        
                    />
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Tipo do filme:</label>
                    <input 
                        type="text" 
                        class="form-control"
                        aria-describedby="emailHelp" 
                        name="tipo_filme" 
                        value="<?= $filme['tipo_filme']; ?>"
                        required 
                        placeholder="Tipo do Filme" 
                        id="tipo_filme"                        
                    />
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Data de lançamento:</label>
                    <input 
                        type="date" 
                        class="form-control" 
                        aria-describedby="dataHelp" 
                        name="data_filme" 
                        value="<?= $filme['data_filme']; ?>"
                        required 
                        placeholder="Data de lançamento" 
                        id="data_filme"  
                    />
                </div>

                <input class="btn btn-primary" type="submit" value="Editar" >
                <a href="index.php"><button type="button" class="btn btn-secondary" >Voltar</button></a>
            </form>
        </div>
    </div>
    
	
</body>
</html>

