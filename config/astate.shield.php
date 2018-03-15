<?php

/**
 * Part of the Shield package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under ASTATE EULA.
 *
 * This source file is subject to ASTATE EULA that is
 * bundled with this package in the LICENSE file.
 *
 * @version    2.0.2
 * @author     Arkansas State University
 * @license    ASTATE EULA
 * @copyright  (c) 2011-2015, Arkansas State University
 * @link       http://git.astate.edu/
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Session Key
    |--------------------------------------------------------------------------
    |
    | Please provide your session key for Shield.
    |
    */

    'session' => 'astate_shield',

    /*
    |--------------------------------------------------------------------------
    | Cookie Key
    |--------------------------------------------------------------------------
    |
    | Please provide your cookie key for Shield.
    |
    */

    'cookie' => 'astate_shield',

    /*
    |--------------------------------------------------------------------------
    | Users
    |--------------------------------------------------------------------------
    |
    | Please provide the user model used in Shield.
    |
    */

    'users' => [

        // 'model' => 'Astate\Shield\Users\EloquentUser',
        'model' => 'Asraf\Users\Models\User',

    ],

    /*
    |--------------------------------------------------------------------------
    | Roles
    |--------------------------------------------------------------------------
    |
    | Please provide the role model used in Shield.
    |
    */

    'roles' => [

        'model' => 'Astate\Shield\Roles\EloquentRole',

    ],

    /*
    |--------------------------------------------------------------------------
    | Permissions
    |--------------------------------------------------------------------------
    |
    | Here you may specify the permissions class. Shield ships with two
    | permission types.
    |
    | 'Astate\Shield\Permissions\StandardPermissions'
    | 'Astate\Shield\Permissions\StrictPermissions'
    |
    | "StandardPermissions" will assign a higher priority to the user
    | permissions over role permissions, once a user is allowed or denied
    | a specific permission, it will be used regardless of the
    | permissions set on the role.
    |
    | "StrictPermissions" will deny any permission as soon as it finds it
    | rejected on either the user or any of the assigned roles.
    |
    */

    'permissions' => [

        'class' => 'Astate\Shield\Permissions\StandardPermissions',

    ],

    /*
    |--------------------------------------------------------------------------
    | Persistences
    |--------------------------------------------------------------------------
    |
    | Here you may specify the persistences model used and weather to use the
    | single persistence mode.
    |
    */

    'persistences' => [

        'model' => 'Astate\Shield\Persistences\EloquentPersistence',

        'single' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | Checkpoints
    |--------------------------------------------------------------------------
    |
    | When logging in, checking for existing sessions and failed logins occur,
    | you may configure an indefinite number of "checkpoints". These are
    | classes which may respond to each event and handle accordingly.
    | We ship with two, a throttling checkpoint and an activation
    | checkpoint. Feel free to add, remove or re-order
    | these.
    |
    */

    'checkpoints' => [

        'throttle',
        'activation',

    ],

    /*
    |--------------------------------------------------------------------------
    | Activations
    |--------------------------------------------------------------------------
    |
    | Here you may specify the activations model used and the time (in seconds)
    | which activation codes expire. By default, activation codes expire after
    | three days. The lottery is used for garbage collection, expired
    | codes will be cleared automatically based on the provided odds.
    |
    */

    'activations' => [

        'model' => 'Astate\Shield\Activations\EloquentActivation',

        'expires' => 259200,

        'lottery' => [2, 100],

    ],

    /*
    |--------------------------------------------------------------------------
    | Reminders
    |--------------------------------------------------------------------------
    |
    | Here you may specify the reminders model used and the time (in seconds)
    | which reminder codes expire. By default, reminder codes expire
    | after four hours. The lottery is used for garbage collection, expired
    | codes will be cleared automatically based on the provided odds.
    |
    */

    'reminders' => [

        'model' => 'Astate\Shield\Reminders\EloquentReminder',

        'expires' => 14400,

        'lottery' => [2, 100],

    ],

    /*
    |--------------------------------------------------------------------------
    | Throttling
    |--------------------------------------------------------------------------
    |
    | Here, you may configure your site's throttling settings. There are three
    | types of throttling.
    |
    | The first type is "global". Global throttling will monitor the overall
    | failed login attempts across your site and can limit the effects of an
    | attempted DDoS attack.
    |
    | The second type is "ip". This allows you to throttle the failed login
    | attempts (across any account) of a given IP address.
    |
    | The third type is "user". This allows you to throttle the login attempts
    | on an individual user account.
    |
    | Each type of throttling has the same options. The first is the interval.
    | This is the time (in seconds) for which we check for failed logins. Any
    | logins outside this time are no longer assessed when throttling.
    |
    | The second option is thresholds. This may be approached one of two ways.
    | the first way, is by providing an key/value array. The key is the number
    | of failed login attempts, and the value is the delay, in seconds, before
    | the next attempt can occur.
    |
    | The second way is by providing an integer. If the number of failed login
    | attempts outweigh the thresholds integer, that throttle is locked until
    | there are no more failed login attempts within the specified interval.
    |
    | On this premise, we encourage you to use array thresholds for global
    | throttling (and perhaps IP throttling as well), so as to not lock your
    | whole site out for minutes on end because it's being DDoS'd. However,
    | for user throttling, locking a single account out because somebody is
    | attempting to breach it could be an appropriate response.
    |
    | You may use any type of throttling for any scenario, and the specific
    | configurations are designed to be customized as your site grows.
    |
    */

    'throttling' => [

        'model' => 'Astate\Shield\Throttling\EloquentThrottle',

        'global' => [

            'interval' => 900,

            'thresholds' => [
                10 => 1,
                20 => 2,
                30 => 4,
                40 => 8,
                50 => 16,
                60 => 12,
            ],

        ],

        'ip' => [

            'interval' => 900,

            'thresholds' => 5,

        ],

        'user' => [

            'interval' => 900,

            'thresholds' => 5,

        ],

    ],

];
