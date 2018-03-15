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
 * @package    ASRAF
 * @version    1.0.0
 * @author     Arkansas State University
 * @license    ASTATE EULA
 * @copyright  (c) 2014-2015, Arkansas State University
 * @link       http://www.astate.edu
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Date Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used throughout the whole application.
    | You can change them to anything you want to customize your views to
    | better match your application.
    |
    */

    'day'           => 'Day',
    'week'          => 'Week',
    'month'         => 'Month',
    'today'         => 'Today',
    'tomorrow'      => 'Tomorrow',
    'yesterday'     => 'Yesterday',
    'this_month'    => 'This Month',
    'last_month'    => 'Last Month',
    'next_month'    => 'Next Month',

    'months' => [
        'january'   => 'January',
        'february'  => 'February',
        'march'     => 'March',
        'april'     => 'April',
        'may'       => 'May',
        'june'      => 'June',
        'july'      => 'July',
        'august'    => 'August',
        'september' => 'September',
        'october'   => 'October',
        'november'  => 'November',
        'december'  => 'December',
    ],

    'days' => [
        'monday'    => 'Monday',
        'tuesday'   => 'Tuesday',
        'wednesday' => 'Wednesday',
        'thursday'  => 'Thursday',
        'friday'    => 'Friday',
        'saturday'  => 'Saturday',
        'sunday'    => 'Sunday',
        'numeric'   => [
            0   =>  'sunday',
            1   =>  'monday',
            2   =>  'tuesday',
            3   =>  'wednesday',
            4   =>  'thursday',
            5   =>  'friday',
            6   =>  'saturday',

        ]
    ],

    'formats'   =>  [
        "custom1"   =>  "D, d M Y h:i:s A" ,
        "custom2"   =>  "D, d M Y h:i A" ,
        "custom3"   =>  "D, d M Y \a\\t h:i:s A" ,
        "custom4"   =>  "D, d M Y \a\\t  h:i A" ,
        "atom"      =>  "Y-m-d\TH:i:sP" ,
        "cookie"    =>  "l, d-M-Y H:i:s T" ,
        "iso8601"   =>  "Y-m-d\TH:i:sO" ,
        "rfc822"    =>  "D, d M y H:i:s O" ,
        "rfc850"    =>  "l, d-M-y H:i:s T" ,
        "rfc1036"   =>  "D, d M y H:i:s O" ,
        "rfc1123"   =>  "D, d M Y H:i:s O" ,
        "rfc2822"   =>  "D, d M Y H:i:s O" ,
        "rfc3339"   =>  "Y-m-d\TH:i:sP" ,
        "rss"       =>  "D, d M Y H:i:s O" ,
        "w3c"       =>  "Y-m-d\TH:i:sP"
    ]

];
