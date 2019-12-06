<?php
/**
 * Template part for displaying Project Items
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
                <?php the_post_thumbnail()?>
                <?php the_content();  ?>

                <?php
                    $company_services__marketing = get_post_meta($post->ID, 'company_services__marketing', true);
                    $company_services__social_media = get_post_meta($post->ID, 'company_services__social_media', true);
                    $company_services__organizational_development = get_post_meta($post->ID, 'company_services__organizational_development', true);
                    if(! $company_services__marketing == NULL ){
                        echo 'Service: ' . $company_services__marketing;
                    }
                ?>
                <br>
                <?php
                    if(! $company_services__social_media == NULL ){
                        echo 'Service: ' . $company_services__social_media;
                    }
                ?>
                <br>
                <?php
                    if(! $company_services__organizational_development == NULL ){
                        echo 'Service: ' . $company_services__organizational_development;
                    }
                ?>
                <br>
            </div>
        </div>
    </div>