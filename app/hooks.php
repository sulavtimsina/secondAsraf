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

/*
|--------------------------------------------------------------------------
| Operation Hooks
|--------------------------------------------------------------------------
|
| Hook into the installation / upgrading of your Asraf installation
|
*/

Installer::before(function () {
    // Called before Asraf is to be installed
});

Installer::after(function () {
    // Called after Asraf has been installed

    // If we have the asraf/menus extension installed, we'll
    // set the order of the admin menu according to the
    // specific application requirements.
    if (class_exists('Asraf\Menus\Models\Menu')) {
        set_menu_order('admin', config('asraf.admin.menu'));

        set_menu_order('main', config('asraf.frontend.menu'));
    }

    // Create the registered role
    $registeredRole = app('shield')->getRoleRepository()->createModel();
    $registeredRole->fill([
        'slug' => 'registered',
        'name' => 'Registered',
    ]);
    $registeredRole->save();
});

/*
|--------------------------------------------------------------------------
| Asraf Hooks
|--------------------------------------------------------------------------
|
| Hooks for events of Asraf itself.
|
*/

Asraf::booting(function ($asraf) {
    // Before Asraf and it's extensions have booted
});

Asraf::booted(function ($asraf) {
    // When everything is setup and ready to roll
});

Asraf::ineligible(function ($asraf) {
    // Whenever Asraf cannot run (needs installing etc)
});

/*
|--------------------------------------------------------------------------
| Extension Hooks
|--------------------------------------------------------------------------
|
| Hooks for various stages of an Extension's lifecycle. You can access the
| individual extension properties through $extension->getSlug().
|
*/

Extension::registering(function (Extension $extension) {
    // Before an extension is registered (happens for every extension)
});

Extension::registered(function (Extension $extension) {
    // After an extension is registered
});

Extension::booting(function (Extension $extension) {
    // Before an installed and enabled extension boots (after all are registered)
});

Extension::booted(function (Extension $extension) {
    // After an installed and enabled extension boots
});

Extension::installing(function (Extension $extension) {
    // Before an extension is installed
});

Extension::installed(function (Extension $extension) {
    // After an extension is installed
});

Extension::uninstalling(function (Extension $extension) {
    // Before an extension is uninstalled
});

Extension::uninstalled(function (Extension $extension) {
    // After an extension is uninstalled
});

Extension::enabling(function (Extension $extension) {
    // Before an extension is enabled
});

Extension::enabled(function (Extension $extension) {
    // After an extension is enabled
});

Extension::disabling(function (Extension $extension) {
    // Before an extension is disabled
});

Extension::disabled(function (Extension $extension) {
    // After an extension is disabled
});

Extension::upgrading(function (Extension $extension) {
    // Before an extension is upgraded
});

Extension::upgraded(function (Extension $extension) {
    // After an extension is upgraded
});