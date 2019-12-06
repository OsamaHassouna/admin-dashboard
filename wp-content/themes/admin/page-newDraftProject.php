<?php
/**
 * Template Name: page newDraftProject
 * The template for adding New Dashboard Task
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#slider
 *
 * @package WordPress
 * @since 1.0.0
 */

get_header();
?>
<!-- Header Menu -->
<?php get_template_part( 'template-parts/sidebar/sidebar', 'menu' );?>
<!-- Body Section  -->
<div class="row no-gutters body-blocks minified">
    <div class="col-12">
        <?php get_template_part( 'template-parts/sidebar/sidebar', 'tools' );?>
        <div class="main-blocks <?php the_title(); ?>">
            <div class="container">
                 <!-- FIRST ROW -->
                 <div class="row no-gutters">
                    <div class="col-12">
                        <h2 class="<?php the_title(); ?>-title"><?php the_title(); ?></h2>
                    </div>
                </div>
                <!-- SECOND ROW -->
                <div class="row no-gutters">
                    <div class="col-12">
                    <?php get_template_part( 'template-parts/content/content', 'add_newDraftProject' );?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_sidebar(); ?>


<?php
get_footer(); ?>