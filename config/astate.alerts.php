<?php

/**
 * Part of the Alerts package.
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
 * @license    BSD License (3-clause)
 * @copyright  (c) 2014-2015, Arkansas State University
 * @link       http://www.astate.edu
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Default Notifier
    |--------------------------------------------------------------------------
    |
    | The default notifier will be used out of the box without having to call
    | an additional method to determine which notifier is the default.
    |
    | 'default' => 'flash'
    |
    | Alerts ships with two notifiers, `flash`, `view`
    |
    */

    'default' => 'flash',

    /*
    |--------------------------------------------------------------------------
    | Classes
    |--------------------------------------------------------------------------
    |
    | The class property on alerts defaults to the alert type by default.
    | To override classes of a specific alert type, specify it here as follows:
    |
    | 'error' => 'danger'
    |
    | This will set the class property on all error alerts to danger.
    |
    */

    'classes' => [

        'error' => 'danger',

    ],

];
