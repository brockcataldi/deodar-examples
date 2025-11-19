<?php 
/**
 * Entry point to the Plugin
 *
 * Plugin Name:       Your Plugin Name
 * Plugin URI:        https://yourwebsite.com
 * Description:       Plugin description
 * Version:           1.0.0
 * Requires at least: 6.7.2
 * Requires PHP:      8.2
 * Author:            Your Name
 * Author URI:        https://yourwebsite.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       your-plugin-text-domain
 */

if(false === function_exists('dbp_deodar')){
    function dbp_deodar($sources){
        return array(
            'production' => false, // Set to true in production
            'url' =>  plugin_dir_url(__FILE__),
            'path' => plugin_dir_path(__FILE__),
            'menus' => array(
                'primary_menu'   => 'Demo Menu',
                'secondary_menu' => 'Secondary Menu',
            ),
            'styles' => array(
                array(
                    'handle'  => 'google-fonts',
                    'url'     => 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap',
                    'backend' => true,
                ),
                array(
                    'handle' => 'slick',
                    'url'    => 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css',
                ),
                array(
                    'handle' => 'index',
                    'file'    => '/build/index.build.css',
                ),
            ),
            'scripts' => array(
                array(
                    'handle'       => 'slick',
                    'url'          => 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',
                    'dependencies' => array('jquery'),
                ),
                array(
                    'handle'      => 'gsap',
                    'url'         => 'https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js'
                ),
                array(
                    'handle' => 'index',
                    'file'    => '/build/index.build.js',
                ),
            ),
            'supports' => array(
                'title-tag',
                'editor-styles',
                array(
                    'feature' => 'html5',
                    'args'    => array(
                        'comment-list',
                        'comment-form',
                        'search-form',
                        'gallery',
                        'caption',
                        'style',
                        'script',
                    ),
                ),
            ),
        );
    }

    add_filter('deodar', 'dbp_deodar');
}