<?php

    require("../model/usuarioDAO.php");

    class EditarUser
    {
        private $editar;
        private $nome;
        private $cpf;
        private $email;

        public function __construct($id)
        {
            $this -> editar = new usuarioDAO();
            $this -> criaForm($id);
        }

        public function criaForm($id)
        {
            $row = $this -> editar -> pesquisaUser($id);
            $this -> nome = $row['nome'];
            $this -> cpf = $row['cpf'];
            $this -> email = $row['email'];
        }

        public function editaForm($nome, $cpf, $email, $id) {
            if($this -> editar -> updateUser($nome, $cpf, $email, $id) == TRUE) {
                echo "<script>Alert('Usuário atualizado com sucesso'); document.location='../index.php'</script>";
            } else {
                echo "<script>Alert('Erro ao editar...'); history.back();'</script>";
            }
        }

        public function getNome()
        {
            return $this -> nome;
        }

        public function getCpf()
        {
            return $this -> cpf;
        }

        public function getEmail()
        {
            return $this -> email;
        }

    }

    $id = filter_input(INPUT_GET, 'id');
    $editar = new EditarUser($id);

    if(isset($_POST['submit'])) {
        $editar -> editaForm($_POST['nome'], $_POST['cpf'], $_POST['email'], $_POST['id']);
    }

?>