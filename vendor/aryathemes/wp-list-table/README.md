# WP_List_Table class

The `WP_List_Table` has been marked as private. If you want to use this class,
it is necessary to create a new class that inherits from the original.

This library wraps the functionality of the `WP_List_Table` class using the PHP
Standards Recommendations.

WordPress Documentation

- [Private Status](https://codex.wordpress.org/Class_Reference/WP_List_Table)
- [WP_List_Table class](https://developer.wordpress.org/reference/classes/wp_list_table/)

## Install

    composer require aryathemes/wp-list-table

## Usage

    <?php
    
    namespace Your\Namespace;
    
    use Arya\WordPress\Admin\Table
    
    /* Your table */
    class YourList extends Table
    {
    }

## Usage without PHP Standards Recommendations

    <?php

    if ( ! class_exists( 'WP_List_Table' ) ) {
        require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
    }

    /* Your table */
    class YourList extends WP_List_Table
    {
    }
