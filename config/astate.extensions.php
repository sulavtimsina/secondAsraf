<?php

/**
 * Part of the Extensions package.
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
    | Extensions Paths
    |--------------------------------------------------------------------------
    |
    | Here you set the default extension paths for your application. If the
    | same extension (determined by the extension's slug) is found in multiple
    | paths, the later extension will be used. Order is important.
    |
    */

    'paths' => [
        __DIR__.'/../extensions',
        __DIR__.'/../workbench',
    ],

    /*
    |--------------------------------------------------------------------------
    | Auto Register
    |--------------------------------------------------------------------------
    |
    | Here you may specify if the extensions are registered when the service
    | provider is booted. This will locate all extensions and register them.
    |
    | Supported: true, false.
    |
    */

    'auto_register' => false,

    /*
    |--------------------------------------------------------------------------
    | Auto Boot
    |--------------------------------------------------------------------------
    |
    | Here you may specify if the extensions are booted when all extensions
    | have been registered, similar to Laravel service providers. It allows you
    | to fire a callback once all extensions are available.
    |
    | Extensions must be auto-registered to be auto-booted.
    |
    | Supported: true, false.
    |
    */

    'auto_boot' => false,

];
