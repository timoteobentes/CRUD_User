<?php

require("../model/usuarioDAO.php");

    class InsertUser
    {
        public $usuario;

        public function __construct()
        {
            $this -> usuario = new usuarioDAO();
            $this -> insert();
        }

        public function insert()
        {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $cpf = $_POST['cpf'];

            $result = $this -> usuario -> setUser($nome, $cpf, $email);

            if($result >= 1) {
                header("Location: ../index.php?msgSucesso=Cadastro realizado com sucesso");
                // echo "<script>alert('Cadastro realizado com sucesso!'); document.location = '../index.php'</script>";
            } else {
                header("Location?msgErro=Erro ao cadastrar...");
                // echo "<script>alert('Erro ao Cadastrar!'); document.location = '../index.php'</script>";
            }
        }
    }

    new InsertUser();

?>