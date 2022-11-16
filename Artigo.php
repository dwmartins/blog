<?php

    class Artigo
    {
        private $mysql;

        public function __construct(mysqli $mysqli)
            {
                $this->mysql = $mysqli;
            }
        public function exibirTodos(): array 
        {

            $resultado = $this->mysql->query('SELECT id, titulo, conteudo FROM artigos');
            $artigos = $resultado->fetch_all(MYSQLI_ASSOC);

            return $artigos;
        }
    }
?>