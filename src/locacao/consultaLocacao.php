
<?php

require('conexao.php');

$filmesDisponiveis = $mysqli->execute_query('SELECT * FROM filme WHERE NOT EXISTS (SELECT * FROM locacao WHERE locacao.filme_id = filme.id AND CURRENT_DATE BETWEEN data_locacao AND data_devolucao)');


