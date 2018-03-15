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
 * @version    4.0.0
 * @author     Arkansas State University
 * @license    ASTATE EULA
 * @copyright  (c) 2014-2015, Arkansas State University
 * @link       http://www.astate.edu
 */

namespace App\Widgets;

class HelloWidget
{
    /**
     * Show a welcome message.
     *
     * @param  string  $name
     * @return string
     */
    public function show($name = null)
    {
        $name = $name ?: 'stranger';

        return "Hello {$name}!";
    }
}
