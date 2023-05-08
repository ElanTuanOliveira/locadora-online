
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>    
</head>
<body> 
    <?php

    $cliente [] = $_POST;
    print_r($cliente);
    
   /* $nome = $_POST['nome'];
    $email = $_POST['email'];
    $data = $_POST['data'];
    
    $cliente = [
    'name' => $nome,
    'mail' => $email,
    'date' => $data
    ];
    


  /* foreach ($cliente as $cadastroCliente) {
    $cadastroCliente = [

        'cliente'=> [
            'name' => $nome,
            'mail' => $email,
            'date' => $data
        ]


    ];
   };
    */
 


    ?>    
</body>
</html>
