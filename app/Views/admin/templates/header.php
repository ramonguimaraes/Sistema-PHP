<!DOCTYPE html>
<html>

<head>
	<title>Area administração</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/style.css')?>">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 


</head>

<body>
	<div class="container-fluid">
		<div class="row">
			<header class="col-md-12">
				<h1>Area administrativa</h1>
				<a href="<?= base_url('/admin/logout')?>">Sair</a>
			</header>
		</div>

		<div class="row">
			<nav class="col-md-2 bg-light">
				<h4>Menu</h4>
				<a href="<?= base_url('admin')?>">Home</a><br>
				<a href="<?= base_url('admin/clients')?>">Lista Clientes</a><br>
				<a href="<?= base_url('admin/clients/insert')?>">Adicionar Cliente</a><br>
			</nav>
			<section class="col-md-10">