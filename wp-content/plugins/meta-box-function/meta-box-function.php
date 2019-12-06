<?php
/*
 Plugin Name: WP Metabox Function
 Description: This is a simple plugin to add metabox to wordpress
 Version: 1.0.0
 Author: Osama Hassouna
 Author URI: https://localhost/Dejavu/admin/
*/
/*
//To get permalinks to work when you activate the plugin
function my_rewrite_flush() {
    // First, we "add" the custom post type via the above written function.
    // Note: "add" is written with quotes, as CPTs don't get added to the DB,
    // They are only referenced in the post_type column with a post entry,
    // when you add a post of this CPT.
    wp_projects_init_cpt();

    // ATTENTION: This is *only* done during plugin activation hook in this example!
    // You should *NEVER EVER* do this on every page load!!
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'my_rewrite_flush' );
*/


/*
// Function for Metabox for cpt only
function wp_register_metabox_cpt() {
    //cpt ** Projects
    add_meta_box("cpt-projects-id", "Projects Metabox", "wp_projects_metabox-function", "project", "side", "high");
}
add_action("add_meta_boxes_project", "wp_register_metabox_cpt");
*/
/*
function custom_init_cpt() {
    $args = array(
      'public' => true,
      'label'  => 'Books'
    );
    register_post_type( 'book', $args );
}
add_action( 'init', 'custom_init_cpt' );
*/

//Create META BOXES
function wp_register_metabox() {
    // page
    // add_meta_box("page-id", "Page Metabox", "wp_page_metabox_function", "page", "normal", "high");
    // post
    add_meta_box("post-id", "Post Metabox", "wp_post_metabox_function", "post", "side", "high");
    //CPT ** Projects
    // add_meta_box("cpt-projects-id", "Projects Metabox", "wp_projects_metabox-function", "project", "side", "high");
}
add_action("add_meta_boxes", "wp_register_metabox");
// INNER METABOX FUNCTION for POST
function wp_post_metabox_function($post){
    //checking nonce field
    wp_nonce_field(basename(__FILE__),"wp_post_nonce");
    ?>
    <!-- HTML for Metabox  -->
    <div>
        <label for="txtPublisherName">Publisher Name</label>
        <?php
            // GEtting Metabox values from db
            $publisher_name = get_post_meta($post->ID, 'post_publisher_name', true);
        ?>
        <input type="text" name="txtPublisherName" placeholder="Publisher Name" value="<?php echo $publisher_name ?>">
    </div>
    <?php
}
//Saving metabox values to db
function save_metabox_data($post_id, $post){
    //verifying the nonce
    if(!isset($_POST['wp_post_nonce']) || !wp_verify_nonce($_POST['wp_post_nonce'],basename(__FILE__))){
        return $post_id;
    }
    //verifying slug value
    $post_slug = 'post';
    if( $post_slug != $post->post_type){
        return;
    }

    //save value to db field
    $pub_name = '';
    if(isset($_POST['txtPublisherName'])){
        $pub_name = sanitize_text_field($_POST['txtPublisherName']);
    }else{
        $pub_name = '';
    }
    update_post_meta($post_id, "post_publisher_name", $pub_name);
}
add_action("save_post", "save_metabox_data", 10, 2);

//Metabox for authors
function register_authors_metabox(){
    //register custom metabox for selecting Authors
    add_meta_box("author-id","Post Author", "custom_author_callback_function", "post", "side","high");
}
add_action("add_meta_boxes", "register_authors_metabox");
function custom_author_callback_function($post){
    //nonce field for security
    wp_nonce_field(basename(__FILE__),"wp_post_author_nonce");
    ?>
    <p>
        <label for="ddauthor">Select Author</label>
        <select name="ddauthor">
            <?php
                $post_id = $post->ID;
                $author_id = get_post_meta($post_id, "post_author_name", true);

                $all_authors = get_users(array('role'=>"author"));
                foreach ( $all_authors as $index => $author ){
                    $selected="";
                    if($author_id == $author->data->ID ){
                        $selected= 'selected="selected"';
                    }
                    ?>
                    <option value="<?php echo $author->data->ID; ?>" <?php echo $selected; ?>><?php echo $author->data->display_name; ?></option>
                    <?php
                }
            ?>
        </select>
    </p>
<?php
}
//save author data to db
function save_author_post($post_id,$post){
    //verifying none field for security
    if(!isset($_POST['wp_post_author_nonce']) || !wp_verify_nonce($_POST['wp_post_author_nonce'],basename(__FILE__))){
        return $post_id;
    }
    //verifying the post type to not let the function work on every post type.
    $post_slug = 'post';
    if( $post_slug != $post->post_type){
        return;
    }
    //saving the author name to db
    $author_name= '';
    if(isset($_POST['ddauthor'])) {
        $author_name = sanitize_text_field($_POST['ddauthor']);
    }else{
        $author_name = '';
    }
    //update post meta
    update_post_meta($post_id, "post_author_name", $author_name);

}
add_action("save_post","save_author_post",10,2);