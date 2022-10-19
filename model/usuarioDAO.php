<?php

    require_once("configDB.php");

    class usuarioDAO
    {
        
        protected $conn;

        public function __construct()
        {
            $this -> conn = mysqli_connect(HOST, USER, PASS, DB);
        }

        // Exibe usuários - método GET
        public function getUser()
        {
            $result = $this -> conn -> query("SELECT * FROM usuario");
            $array = array();

            while($row = $result -> fetch_array(MYSQLI_ASSOC)) {
                $array[] = $row;
            }

            return $array;
        }

        // Insere usuário - método POST
        public function setUser($nome, $cpf, $email)
        {
            $stmt = $this -> conn -> prepare("INSERT INTO usuario (`nome`, `cpf`, `email`) VALUES (?, ?, ?)");
            $stmt -> bind_param("sss", $nome, $cpf, $email);

            if($stmt -> execute() == TRUE) {
                return true;
            } else {
                return false;
            }
        }

        public function pesquisaUser($id)
        {
            $result = $this -> conn -> query("SELECT * FROM usuario WHERE nome ='" . $id . "';");
            return $result -> fetch_array(MYSQLI_ASSOC);
        }

        // Atualiza usuário - método PUT
        public function updateUser($nome, $cpf, $email, $id)
        {
            $stmt = $this -> conn -> prepare("UPDATE usuario SET `nome` = ?, `cpf` = ?, `email` = ? WHERE nome = '" . $id . "';");
            $stmt -> bind_param("ssss", $nome, $cpf, $email, $id);

            if($stmt -> execute() == TRUE) {
                return true;
            } else {
                return false;
            }
        }

        // Deleta usuário - método DELETE
        public function deleteUser($id)
        {
            $result = $this -> conn -> query("DELETE FROM `usuario` WHERE `nome` = '" . $id . "';");
            if($result == TRUE) {
                return true;
            } else {
                return false;
            }
        }


    }

?>