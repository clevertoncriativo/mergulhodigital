<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="icon" href="<?php echo base_url('assets/imgs/logo/favicon/favicon-32x32.png')?>" type="image/x-icon">
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css?'. rand())?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css?'. rand())?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/dist/css/theme.css?'. rand())?>" rel="stylesheet" />

    <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
</head>
<body>

<header>

<div id="page-loader">
    <div class="loader-img">        
        <img src="<?php echo base_url('assets/imgs/logo/logo-min.png') ?>" class="rounded"> 
    </div>
</div>

<nav class="<?php echo !empty($route) && $route == 'home' ? 'navbar navbar-expand-md navbar-light fixed-top' : 'navbar navbar-expand-md navbar-light nav-scroll'; ?>">
    <div class="container"> 
      <a class="navbar-brand text-primary" href="<?php echo base_url() ?>">
      <img src="<?php echo base_url('assets/imgs/logo/logo.png')?>" class="logo"/>
      </a> 
      <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar4">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar4">
        <ul class="navbar-nav ml-auto">
           <li class="nav-item"> <a class="nav-link" href="<?php echo base_url()?>">Home</a> </li>
           <li class="nav-item"> <a class="nav-link" href="#clientes">Clientes</a> </li>
           <!-- <li class="nav-item"> <a class="nav-link" href="#quem-somos">Quem somos</a> </li> -->
           <li class="nav-item"> <a class="nav-link" href="#contato">Contato</a> </li>          
        </ul>
      </div>
    </div>
  </nav>
</header>

<main>