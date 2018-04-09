<?php
/* Smarty version 3.1.30, created on 2018-04-09 18:01:57
  from "C:\wamp64\www\tamere2\includes\haut.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5acbaa9526aef3_09133375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec97ab09b1d47654d21569bc398fb1fa04fe4da7' => 
    array (
      0 => 'C:\\wamp64\\www\\tamere2\\includes\\haut.tpl',
      1 => 1523296912,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5acbaa9526aef3_09133375 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Micro blog</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Theme CSS -->
    <link href="css/freelancer.css" rel="stylesheet">
     
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">


</head>

    <body id="page-top" class="index">

        <!-- Navigation -->
        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.php">Micro blog</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>

                        <li>                            
                            <?php if ($_smarty_tpl->tpl_vars['nom']->value == '') {?>                          
                                <!-- Bouton connexion si non connecté-->
                                <li>
                                    <a id="connexion" href="connexion.php">Mon compte</a>
                                </li>
                            <?php } else { ?>
                                <!-- Bouton déconnexion si connecté-->
                                <a id="deconnexion" href="deconnexion.php">Me deconnecter </a> 
                            <?php }?>
                        </li>
                        <li><div class="col-sm-1"></div></li>
                        <li>
                            <!-- Formulaire de recherche -->
                            <form id="searchForm" action="recherche.php" method="GET">
                                <input type="text" placeholder="Rechercher" name="search" class="form-control">
                            </form>
                        </li>                        
                    </ul>

                </div>          
            </div>
        </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text">
                        <span class="name">Le fil</span>
                        <hr class="star-light">
                    </div>
                </div>
            </div>
        </div>
    </header>

<section>
    <div class="container">

       <?php }
}
