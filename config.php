<?php 

$mysql = new mysqli('localhost', 'root', '', 'blog');
                        // local, usuario, senha, banco.
$mysql->set_charset('utf8');

    if($mysql == false) {
        echo "Erro na conexão com o banco de dados";
    }
?>