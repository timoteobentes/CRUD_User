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
                echo "<td>" . $value['nome'] . "</td>";
                echo "<td>" . $value['email'] . "</td>";
                echo "<td>" . $value['cpf'] . "</td>";
                echo "<td><a href='./view/pages/editar.php?id=" . $value['nome'] ."'><ion-icon name='pencil'></ion-icon></a><a href='./controller/deletar.php?id=" . $value['nome'] ."'><ion-icon name='trash'></ion-icon></a></td>";
                echo "</tr>";
            }
        }
    }

?>