<?php 

if(false === function_exists('dbt_deodar')){
    function dbt_deodar($sources){
        return array(
            'production' => false, // Set to true in production
            'url' =>  get_stylesheet_directory_uri(),
            'path' => get_stylesheet_directory(),
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

    add_filter('deodar', 'dbt_deodar');
}