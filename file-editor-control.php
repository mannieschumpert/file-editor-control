<?php
/**
 * Plugin Name:       File Editor Control
 * Description:       Adds ability to allow only certain users access to the WordPress file editor
 * Version:           0.1
 * Author:            Mannie Schumpert
 * Author URI:        http://mannieschumpert@gmail.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

add_filter( 'user_has_cap', 'file_editor_control', 10, 4 );
function file_editor_control( $caps, $cap, $args, $user ){

    $allowed_editors = array();
    $allowed_editors = apply_filters( 'fec_allowed_file_editors', $allowed_editors );

    // Don't block caps if current user = allowed user
    if ( in_array( $user->ID, $allowed_editors ) )
        return $caps;

    $caps['edit_themes'] = false;

    return $caps;
}