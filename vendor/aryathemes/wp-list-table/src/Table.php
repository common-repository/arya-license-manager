<?php
/**
 * @package Arya\WordPress\Admin
 */

namespace Arya\WordPress\Admin;

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( '\Arya\WordPress\Admin\Table' ) ) :

    /* Load WP_List_Table class */
    if ( ! class_exists( '\WP_List_Table' ) ) {
        require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
    }

    class Table extends \WP_List_Table
    {
    }

endif;
