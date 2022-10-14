<?php

/**
 * @package ReasonDigital
 */

if (!function_exists('reasondigital_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which runs
     * before the init hook. The init hook is too late for some features, such as indicating
     * support post thumbnails.
     */
    function reasondigital_setup()
    {

        /**
         * Make theme available for translation.
         * Translations can be placed in the /languages/ directory.
         */
        load_theme_textdomain('reasondigital', get_template_directory() . '/languages');

        /**
         * Add default posts and comments RSS feed links to &lt;head&gt;.
         */
        add_theme_support('automatic-feed-links');

        /**
         * Enable support for post thumbnails and featured images.
         */
        add_theme_support('post-thumbnails');

        /**
         * Enable support for the following post formats:
         * aside, gallery, quote, image, and video
         */
        add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));
    }
endif; // reasondigital_setup
add_action('after_setup_theme', 'reasondigital_setup');
