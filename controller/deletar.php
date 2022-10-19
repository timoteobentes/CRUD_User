<?php

    require_once("../model/usuarioDAO.php");

    class DeleteUser
    {
        private $deletaUsuario;

        public function __construct($id)
        {
            $this -> deletaUsuario = new usuarioDAO();

            if($this -> deletaUsuario -> deleteUser($id) == TRUE) {
                echo "<script>alert('Usuário excluído com sucesso!');document.location='../index.php'</script>";
            } else {
                echo "<script>alert('Erro ao excluir...');history.back()</script>";
            }
        }
    }

    new DeleteUser($_GET['id']);

?>