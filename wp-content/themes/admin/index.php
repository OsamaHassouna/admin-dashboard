<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage Admin
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>


<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<?php if ( !is_page() ):?>
	<?php endif; ?>
	<section class="entry-content">

	    <?php the_content(); ?>

	</section>
</article>
<?php
get_footer(); ?>
