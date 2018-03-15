<?php
/**
 * Part of the ASRAF.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the ASTATE EULA License.
 *
 * This source file is subject to the ASTATE EULA License that is
 * bundled with this package in the LICENSE file.
 *
 * @version    1.0.0
 * @author     Arkansas State University
 * @license    ASTATE EULA
 * @copyright  (c) 2014-2015, Arkansas State University
 * @link       http://www.astate.edu
 */

return [

    /*
    |--------------------------------------------------------------------------
    | App
    |--------------------------------------------------------------------------
    |
    | Basic configuration for your ASRAF.
    |
    */

    'app' => [

        /*
        |--------------------------------------------------------------------------
        | App Title
        |--------------------------------------------------------------------------
        |
        | Here you may specify the title of the site you are building, to be used
        | throughout your templates (as an example).
        |
        */

        'title' => 'ASRAF',

        /*
        |--------------------------------------------------------------------------
        | App Tagline
        |--------------------------------------------------------------------------
        |
        | Here you may specify the tagline of the site you are building, to be used
        | throughout your templates (as an example).
        |
        */

        'tagline' => 'An application based on Laravel',

        /*
        |--------------------------------------------------------------------------
        | App Email
        |--------------------------------------------------------------------------
        |
        | Here you may specify your website general email address, this can be
        | used on other extensions to send emails.
        |
        */

        'email' => null,

        /*
        |--------------------------------------------------------------------------
        | App Copyright
        |--------------------------------------------------------------------------
        |
        | Specify the copyright clause for your website
        |
        */

        'copyright' => '&copy; 1909-2015, Arkansas State University',

        /*
        |--------------------------------------------------------------------------
        | App Help
        |--------------------------------------------------------------------------
        |
        | Enable or disable the help sections
        |
        */

        'help' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | Frontend
    |--------------------------------------------------------------------------
    |
    | Configuration the frontend of your ASRAF.
    |
    */

    'frontend' => [

        /*
        |--------------------------------------------------------------------------
        | Menu
        |--------------------------------------------------------------------------
        |
        | Here you can list the order for which the menu children will appear
        | in the admin of your application. Feel free to add any menus for
        | any extensions your application ships with!
        |
        | If a menu children doesn't exist, it'll be skipped, the
        | order however, will be preserved.
        |
        */

        'menu' => [

            'main-documentation',
            'main-support',
            'main-license',

        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Admin
    |--------------------------------------------------------------------------
    |
    | Configuration the administration of your ASRAF.
    |
    */

    'admin' => [

        /*
        |--------------------------------------------------------------------------
        | Menu
        |--------------------------------------------------------------------------
        |
        | Here you can list the order for which the menu children will appear
        | in the admin of your application. Feel free to add any menus for
        | any extensions your application ships with!
        |
        | If a menu children doesn't exist, it'll be skipped, the
        | order however, will be preserved.
        |
        */

        'menu' => [
            'admin-dashboard',
            'admin-pages',
            'admin-content',
            'admin-media',
            'admin-attributes',
            'admin-menus',
            'admin-guardian',
            'admin-operations',

        ],

    ],

];
