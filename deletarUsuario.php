<?php require 'functions.php';

    if(!empty($_GET['id'])){

        $id = $_GET['id'];
        $sqlUsuario = "SELECT * FROM usuarios WHERE id=$id";

        $queryUsuario = mysqli_query($dbconn, $sqlUsuario);

        if($queryUsuario->num_rows > 0){

            $sqlDeletar = "DELETE FROM usuarios WHERE id=$id";
            $queryDeletar = mysqli_query($dbconn, $sqlDeletar);
        }


    }
    header('location: admin_usuarios.php')

?>