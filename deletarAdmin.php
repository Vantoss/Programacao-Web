<?php require 'functions.php';

    if(!empty($_GET['id'])){

        $id = $_GET['id'];
        $sqlAdmin = "SELECT * FROM admin WHERE id=$id";

        $queryAdmin = mysqli_query($dbconn, $sqlAdmin);

        if($queryAdmin->num_rows > 0){

            $sqlDeletar = "DELETE FROM admin WHERE id=$id";
            $queryDeletar = mysqli_query($dbconn, $sqlDeletar);
        }


    }
    header('location: admin_usuariosadmin.php')

?>