<?php

    require("./model/usuarioDAO.php");

    class ListarUsers
    {
        private $lista;

        public function __construct()
        {
            $this -> lista = new usuarioDAO();
            $this -> criarTabela();
        }

        public function criarTabela()
        {
            $row = $this -> lista -> getUser();
            foreach($row as $value) {
                echo "<tr>";
                //echo "<th>" . $value['id'] . "</th>";
                echo "<th>" . $value['nome'] . "</th>";
                echo "<th>" . $value['email'] . "</th>";
                echo "<th>" . $value['cpf'] . "</th>";
                echo "</tr>";
            }
        }
    }

?>