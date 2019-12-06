<?php
/*
 Plugin Name: WP Metabox Online
 Description: This is a simple plugin to add metabox to wordpress generated Online
 Version: 1.0.0
 Author: Osama Hassouna
 Author URI: https://localhost/Dejavu/admin/
*/

function company_services__get_meta( $value ) {
	global $post;

	$field = get_post_meta( $post->ID, $value, true );
	if ( ! empty( $field ) ) {
		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
	} else {
		return false;
	}
}

function company_services__add_meta_box() {
	add_meta_box(
		'company_services_-company-services',
		__( 'Company Services ', 'company_services_' ),
		'company_services__html',
		'project',
		'side',
		'high'
	);
}
add_action( 'add_meta_boxes', 'company_services__add_meta_box' );

function company_services__html( $post) {
	wp_nonce_field( '_company_services__nonce', 'company_services__nonce' ); ?>

	<p>

		<input type="checkbox" name="company_services__marketing" id="company_services__marketing" value="marketing" <?php echo ( company_services__get_meta( 'company_services__marketing' ) === 'marketing' ) ? 'checked' : ''; ?>>
		<label for="company_services__marketing"><?php _e( 'Marketing', 'company_services_' ); ?></label>	</p>	<p>

		<input type="checkbox" name="company_services__social_media" id="company_services__social_media" value="social-media" <?php echo ( company_services__get_meta( 'company_services__social_media' ) === 'social-media' ) ? 'checked' : ''; ?>>
		<label for="company_services__social_media"><?php _e( 'Social Media', 'company_services_' ); ?></label>	</p>	<p>

		<input type="checkbox" name="company_services__organizational_development" id="company_services__organizational_development" value="organizational-development" <?php echo ( company_services__get_meta( 'company_services__organizational_development' ) === 'organizational-development' ) ? 'checked' : ''; ?>>
		<label for="company_services__organizational_development"><?php _e( 'Organizational Development', 'company_services_' ); ?></label>	</p><?php
}

function company_services__save( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! isset( $_POST['company_services__nonce'] ) || ! wp_verify_nonce( $_POST['company_services__nonce'], '_company_services__nonce' ) ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;

	if ( isset( $_POST['company_services__marketing'] ) )
		update_post_meta( $post_id, 'company_services__marketing', esc_attr( $_POST['company_services__marketing'] ) );
	else
		update_post_meta( $post_id, 'company_services__marketing', null );
	if ( isset( $_POST['company_services__social_media'] ) )
		update_post_meta( $post_id, 'company_services__social_media', esc_attr( $_POST['company_services__social_media'] ) );
	else
		update_post_meta( $post_id, 'company_services__social_media', null );
	if ( isset( $_POST['company_services__organizational_development'] ) )
		update_post_meta( $post_id, 'company_services__organizational_development', esc_attr( $_POST['company_services__organizational_development'] ) );
	else
		update_post_meta( $post_id, 'company_services__organizational_development', null );
}
add_action( 'save_post', 'company_services__save' );

/*
	Usage: company_services__get_meta( 'company_services__marketing' )
	Usage: company_services__get_meta( 'company_services__social_media' )
	Usage: company_services__get_meta( 'company_services__organizational_development' )
*/
