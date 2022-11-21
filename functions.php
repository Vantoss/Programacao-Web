<?php

$host = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "pizzaria";

$dbconn = mysqli_connect($host, $dbUser, $dbPass, $dbName);

function loginAdmin($dbconn, $user, $pass){

    if ($_POST['send_admin']){

        $sql = "SELECT * FROM admin WHERE login = '$user' AND senha = '$pass'";
        $query = mysqli_query($dbconn, $sql);
        $result = mysqli_fetch_assoc($query);

        if (!empty($result)) {
            session_start();
            $_SESSION['adminSession'] = TRUE;
            header("location: admin.php");
        }

    }

}