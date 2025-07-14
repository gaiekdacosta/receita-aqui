<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <header>
        <nav class="container">
            <div class="logo">
                <i class="fas fa-heartbeat"></i> Receita Aqui
            </div>
            <ul class="nav-links">
                <li><a href="#home">Início</a></li>
                <li><a href="#services">Serviços</a></li>
                <li><a href="#how-it-works">Como Funciona</a></li>
                <li><a href="#depoimentos">Depoimentos</a></li>
                <li><a href="#receitas">Receitas</a></li>
                <li><a href="#contact">Contato</a></li>
            </ul>
            <button class="mobile-menu">
                <i class="fas fa-bars"></i>
            </button>
        </nav>
    </header>
