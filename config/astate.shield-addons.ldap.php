<?php

return [

    /*
    |--------------------------------------------------------------------------
    | LDAP Authentication
    |--------------------------------------------------------------------------
    |
    | This determines whether the users are authenticated agains the configured LDAP
    | servers while logging in
    |
    */

    'authentication' => env('LDAP_LOGIN', false),

    'host' => env('LDAP_HOST', ''),

    'port' => env('LDAP_PORT', 389),

    'search_user_dn' => env('LDAP_SEARCH_USER_DN', ''),

    'search_base' => env('LDAP_SEARCH_BASE', ''),

    'login_attribute' => env('LDAP_LOGIN_ATTRIBUTE', 'sAMAccountName'),

    'search_password' => env('LDAP_SEARCH_PASSWORD', ''),

    'LDAP_OPT_DIAGNOSTIC_MESSAGE' => 0x0032,

    /*
    |--------------------------------------------------------------------------
    | Account Registration
    |--------------------------------------------------------------------------
    |
    | This determines whether ldap users are automatically registered if an account doesnt exist database.
    |
    */

    'registration' => env('LDAP_REGISTRATION', false),

];
