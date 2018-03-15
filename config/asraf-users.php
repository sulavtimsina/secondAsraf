<?php
/**
 * Part of the ASRAF Users extension.
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

    'standard_login'   => env('STANDARD_LOGIN', false),

    /*
    |--------------------------------------------------------------------------
    | Authentication Login Columns
    |--------------------------------------------------------------------------
    |
    | Define here all the columns that can be used to authenticate
    | the users against, if all or some of the columns are passed
    | through the form, it is considered a combo login.
    |
    */

    'login_columns' => [
        'username',
        'email',
        'password',
    ],

    /*
    |--------------------------------------------------------------------------
    | Account Registration
    |--------------------------------------------------------------------------
    |
    | This determines whether new users are allowed to self register.
    |
    */

    'registration' => env('STANDARD_REGISTRATION', false),

    /*
    |--------------------------------------------------------------------------
    | Send Password on Registration
    |--------------------------------------------------------------------------
    |
    | This determines whether the user's initial password will be emailed to
    | the user as part of the registration email.
    |
    */

    'send_password' => false,

    /*
    |--------------------------------------------------------------------------
    | Account Activation
    |--------------------------------------------------------------------------
    |
    | This determines whether users have immediate access to their account or
    | if a confirmation email is required. You can also completely disable
    | this functionallity.
    |
    | Supported: "automatic", "email", "admin"
    |
    */

    'activation' => 'email',

    /*
    |--------------------------------------------------------------------------
    | Default role
    |--------------------------------------------------------------------------
    |
    | Define here the slug of the default role that users will be
    | assigned to when they create an account.
    |
    */

    'default_role' => 'registered',

    /*
    |--------------------------------------------------------------------------
    | Gravatar Settings
    |--------------------------------------------------------------------------
    |
    | Various configurations for gravatar
    |
    */
    'gravatar' => [
        // --- The default avatar size
        'size' => 80,
        // --- The default avatar to display if we have no results
        // (bool)   false
        // (string) 404
        // (string) mm: (mystery-man) a simple, cartoon-style silhouetted outline of a person (does not vary by email hash).
        // (string) identicon: a geometric pattern based on an email hash.
        // (string) monsterid: a generated 'monster' with different colors, faces, etc.
        // (string) wavatar: generated faces with differing features and backgrounds.
        // (string) retro: awesome generated, 8-bit arcade-style pixelated faces.
        'default' => 'mm',
        // --- Set the type of avatars we allow to show
        // - g: suitable for display on all websites with any audience type.
        // - pg: may contain rude gestures, provocatively dressed individuals, the lesser swear words, or mild violence.
        // - r: may contain such things as harsh profanity, intense violence, nudity, or hard drug use.
        // - x: may contain hardcore sexual imagery or extremely disturbing violence.
        'maxRating' => 'g'
    ]
];
