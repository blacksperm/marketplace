<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $title; ?></title>	
	<!-- Estilo de bootstrap -->
	<link rel="stylesheet" href="<?= base_url('props/bootstrap/css/bootstrap.css') ?>">
	<!-- Estilo de alertas -->
	<link rel="stylesheet" href="<?= base_url('props/alertifyjs/css/alertify.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('props/alertifyjs/css/themes/default.min.css') ?>">

	<!-- Libreria jquery necesaria para el funcionamiento de AJAX y demas efectos -->
	<script src="<?= base_url('props/bootstrap/js/jquery.js') ?>"></script>
	<!-- Libreria js de bootstrap necesaria para efectos de modal -->
	<script src="<?= base_url('props/bootstrap/js/bootstrap.js');?>"></script>
	<!-- Libreria js de alertify necesaria para ejecutar las alertas -->
	<script src="<?= base_url('props/alertifyjs/alertify.min.js');?>"></script>
</head>