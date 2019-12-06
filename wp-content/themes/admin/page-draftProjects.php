<?php
/**
 * Template Name: page draftProject
 * The template for displaying Dashboard tasks
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
                        <h2 class="<?php the_title(); ?>-title">All <?php the_title(); ?></h2>
                        <div class="btn-newProject">
                            <a href="<?php echo home_url('/new-draftProject'); ?>" class="btn btn-newProject">New Draft Project</a>
                        </div>
                    </div>
                </div>
                <!-- SECOND ROW -->
                <div class="row no-gutters">
                    <div class="col-12">
                        <ul class="draftProjects-list">
                            <?php
                                $args = array(
                                    'post_type' => 'draftProject'
                                    );

                                $the_query = new WP_Query( $args );
                                if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();

                            ?>
                            <li class="draftProject">
                                <a href="<?php the_permalink(); ?>" class="draftProject-img">
                                    <?php if ( has_post_thumbnail() ) {the_post_thumbnail();}  ?>
                                </a>
                                <div class="draftProject-content">
                                    <a href="<?php the_permalink(); ?>" class="draftProject-title">
                                        <h2><?php the_title(); ?></h2>
                                    </a>
                                    <!-- <a href="#" class="company-content"> -->
                                    <?php the_content(); ?>
                                </div>
                                <!-- </a> -->
                            </li><!-- /.service -->

                            <?php endwhile; else: ?>

                            <p>Nothing Here.</p>

                            <?php endif; wp_reset_postdata(); ?>

                        </ul><!-- #service-list -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_sidebar(); ?>


<?php
get_footer(); ?>
