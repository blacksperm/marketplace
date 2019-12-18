<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $title; ?></title>
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/img/apple-icon.png') ?>">
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/img/favicon.ico') ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
	<!-- CSS Files -->
	<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/light-bootstrap-dashboard.css');?>"  />
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="<?= base_url('assets/css/demo.css'); ?>">	
	<!-- Estilo de bootstrap -->
	<link rel="stylesheet" href="<?= base_url('props/bootstrap/css/bootstrap.css') ?>">
	<!-- Estilo de alertas -->
	<link rel="stylesheet" href="<?= base_url('props/alertifyjs/css/alertify.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('props/alertifyjs/css/themes/default.min.css') ?>">

	<!-- Libreria jquery necesaria para el funcionamiento de AJAX y demas efectos -->
	<script src="<?php echo base_url('props/bootstrap/js/jquery.js') ?>"></script>
	
	<!-- Libreria js de bootstrap necesaria para efectos de modal -->
	<script src="<?php echo base_url('props/bootstrap/js/bootstrap.js');?>"></script>
	<!-- Libreria js de alertify necesaria para ejecutar las alertas -->
	<script src="<?php echo base_url('props/alertifyjs/alertify.min.js');?>"></script>
	<script src="<?php echo base_url('props/bootstrap/js/jquery.mask.min.js') ?>"></script>
</head>
