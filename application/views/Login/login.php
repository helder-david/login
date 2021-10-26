<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>

		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>
<style>
/*	.class
		#id
	*/
	header{
		margin-left:  5%;
		margin-right:  5%;
		width: 90%;
		border:  1px solid black;
		height:  100px;
		text-align: center;
	}
	main{
		margin-top:  2%;
		margin-left:  5%;
		margin-right:  5%;
		width: 90%;
		border:  1px solid red;
		text-align: center;
	}
	footer{
		margin-top:  2%;
		margin-left:  1%;
		margin-right:  1%;
		width: 98%;
		border:  1px solid blue;
		height:  50px;
		text-align: center;
	}
	.imagen{
		width: 40%;
		border:  1px solid gray;
		margin-top:  15px;
		margin-left:  30%;
		margin-right:  30%;
		height:  70px;
	}
	.login{
		width: 80%;
		border:  1px solid lightblue;
		margin-top:  10px;
		height:  50px;
		margin-left:  10%;
		margin-right:  10%;
		background-color: lightgray;
		text-align: center;
		padding-top: 150px;
		padding-bottom: 300px;

	}
	.inputs{

		width: 40%;
		margin-left:  30%;
		margin-right:  30%;
	}
</style>
<body>
	<header>
		<div class="imagen">
			<h1>LOGO</h1>
		</div>
	</header>
	<main>
		<section class="login">
			<div class="input-group mb-3 input-group-sm inputs" >
			 <div class="input-group-prepend">
			    <span class="input-group-text">Usuario</span>
			 </div>
			 <input type="text" class="form-control" id="usr">
			</div>
			<div class="input-group mb-3 input-group-sm inputs" >
			 <div class="input-group-prepend">
			    <span class="input-group-text">Contraseña</span>
			 </div>
			 <input type="password" class="form-control" id="psw">
			</div>
			<button type="submit" class="btn btn-success" onclick="ingreso()">Ingresar</button>

		</section>
	</main>
	<footer>
		<p>Derechos Reservados 2021</p>
	</footer>
</body>
</html>
<script src="<?php echo base_url('assets/js/login.js') ?>"></script>