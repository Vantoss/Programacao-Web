<?php session_start(); require 'functions.php'; ?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Admin</title>

	<style>

		.table-bs{
        background: rgba(0, 0, 0, 0.2);
        border-radius:  10px 10px 0 0;
    }

		.box-search{
        display: flex;
        justify-content: center;
        gap: .1%;
				margin-top: 30px;
    }

    .form_cadastro{
    	  
	    	margin: 60px auto;
	    	width: 500px; 
	    	padding: 20px; 
	    	border-radius: 10px;
	    	background-color: white;
	  }

	  body{
	  	background-color: #f5f5f5;
	  }

	</style>

</head>
<body>
	<?php require "navbaradmin.php";?>

	<?php if ( isset($_SESSION['adminSession']) ) { ?>
		
		<!-- corpo da pagina -->


	<?php } else {
		header("location: login_admin.php");
	} ?>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
</body>
</html>
