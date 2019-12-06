<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package admin company
 */
get_header();
?>
    <!-- Main Board Header -->
    <?php get_template_part( 'template-parts/sidebar/sidebar', 'menu' );?>
    <!-- Body Section  -->
    <div class="row no-gutters body-blocks minified">
        <div class="col-12">
            <?php get_template_part( 'template-parts/sidebar/sidebar', 'tools' );?>

            <?php
                while ( have_posts() ) : the_post();
                    get_template_part( 'template-parts/content/content', 'single_company' );
                endwhile; // End of the loop.
            ?>

        </div>
    </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>