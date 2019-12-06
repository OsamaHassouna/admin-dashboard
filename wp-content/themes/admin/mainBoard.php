<?php
/**
 * Template Name: mainboard
 * The template for displaying Dashboard Main Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#slider
 *
 * @package WordPress
 * @since 1.0.0
 */

get_header();
?>
<!-- Main Board Header -->
<?php get_template_part( 'template-parts/sidebar/sidebar', 'menu' );?>
<!-- Body Section  -->
<div class="row no-gutters body-blocks minified">
    <div class="col-12">
        <?php get_template_part( 'template-parts/sidebar/sidebar', 'tools' );?>
        <div class="main-blocks">
            <div class="container">

                <!-- FIRST ROW -->
                <div class="row no-gutters">
                    <div class="col-12">

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<?php get_sidebar(); ?>


<?php
get_footer(); ?>