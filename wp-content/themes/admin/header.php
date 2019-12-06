<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up to header content section
 *
 * @package WordPress
 * @subpackage Admin
 * @since 1.0
 * @version 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <?php wp_head(); ?>
    </head>
	<body <?php body_class(); ?>>
        <div class='container-fluid'>
            <div class='row no-gutters'>
                <div class='col-12'>
                    <!-- Header -->