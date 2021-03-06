<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="de">
<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width"/>
    <title><?php wp_title('-', true, 'right');?></title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,600italic,300italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/vendor.css" type="text/css" media="screen" />
    <?php wp_head(); ?>
</head>
<body>
    <?php include(__DIR__ . '/includes/partials/header.partial.php'); ?>

    <main class="na-main">
    <?php $sectionCounter = 0; ?>