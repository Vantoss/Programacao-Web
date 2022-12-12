<?php

$host = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "pizzaria";

$dbconn = mysqli_connect($host, $dbUser, $dbPass, $dbName);

$_SESSION['msg'] = " ";
$_SESSION['msgCad'] = " ";

function loginAdmin($dbconn, $user, $pass){

    

    if (isset($_POST['send_admin'])){

        $sha1pass = sha1($pass);

        $sql = "SELECT login, senha, master FROM admin WHERE login = '$user' AND senha = '$sha1pass'";
        $query = mysqli_query($dbconn, $sql);
        $result = mysqli_fetch_assoc($query);

        if(!isset($result)){
            $result = array('login' => NULL, 'senha' => NULL);
        }

        if ($user == $result['login'] && $sha1pass == $result['senha']) {
            session_start();
            if($result['master'] == 1){
                $_SESSION['adminMaster'] = TRUE;
            } else {
                $_SESSION['adminMaster'] = FALSE;
            }
            $_SESSION['adminSession'] = TRUE;
            header("location: admin.php");
        }
        else {
            $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Login ou senha incorretos!</div>";
        }
        
    } else{

        $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Login ou senha inválidos!</div>";
    }

}

function cadastroAdmin($dbconn, $user, $pass, $master){
    if (!empty($user) AND !empty($pass)){

        $sha1pass = sha1($pass);
        $sql = "INSERT INTO admin (login, senha, master) VALUES ('$user' , '$sha1pass' , '$master')";
        $query = mysqli_query($dbconn, $sql);

        if($query){
            $_SESSION['msgCad'] = "<div class='alert alert-success alert-dismissible fade show' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert'></button>Admin cadastrado!</div>";
        }
        else {
            echo "Erro ao inserir";
        }
    }
    else {
        echo "dados invalidos";
    }
}

function logoutAdmin(){

    session_start();
    session_unset();
    session_destroy();
    header("location: login_admin.php");

}

function logoutUser(){
    session_start();
    session_unset();
    session_destroy();
    header("location: login.php");
}