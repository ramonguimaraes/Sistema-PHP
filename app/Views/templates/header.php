<!DOCTYPE html>
<html>

<head>
	<title>Página exemplo LPW</title>
	<meta charset="utf-8">

	
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/style.css')?>">


	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 

</head>

<body>
	<div class="container-fluid">
		<div class="row">
			<header class="col-md-12">
				<h1>Sistemão super sistematico</h1>
			</header>
		</div>

		<div class="row">
			<nav class="col-md-2 bg-light">
				<h4>Menu</h4>
				<hr>
				<a href="<?= base_url('home')?>">Home</a><br>
				<a href="<?= base_url('products')?>">Produtos</a><br>
				<a href="<?= base_url('contact')?>">Contato</a><br>
				<a href="<?= base_url('about')?>">Sobre</a><br>
				<hr>
				<h4>Clientes</h4>
				<a href="<?= base_url('clients')?>">Listar</a><br>
			</nav>
			<section class="col-md-10">