<?php
/**
 * Template part for displaying Companies Items
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Admin
 * @since 1.0.0
 */
?>

    <div class="main-blocks" id="post-<?php the_ID(); ?>" >
    <?php $postId = get_the_ID();?>
        <div class="container">

            <h2><?php the_title(); ?></h2>
            <div class="post-content">
                <?php the_post_thumbnail() ?>
                <?php the_content(); ?>
            </div>
        </div>
    </div>