<?php

/**
 * @package    GravMultisite
 *
 * @copyright  Copyright (c) 2021 Levitation, LLC. All rights reserved.
 * @license    MIT License; see LICENSE file for details.
 */

define('GRAVM', true);
define('GRAVM_VERSION', '1.1.1');
define('GRAVM_SITE_GRAV', '../grav');   // RELATIVE path from GravM site to Grav host (used in site's `/setup.php`)
define('GRAV_ENVIRONMENT_PATH', '');    // Disable Grav's quasi multisite for this GravM site

// !!!
// !!!  Don't forget to revise GravMultisite streams in `/setup.php`
// !!!  All GravM multisite magic lives there!
// !!!

$gravPath = __DIR__ . '/' . GRAVM_SITE_GRAV;   // Abs path to Grav host

// !!!
// !!! Fix known inaccuracies in Grav installation
// !!! Comment or remove this fix if you are shure that Grav host used is already fixed
// !!!
if (file_exists($fix = __DIR__ . '/gravmFixGrav.php')) {
    require $fix;
    gravmFixGrav($gravPath);
}

// Launch native Grav engine in an established multisite environment
require $gravPath . '/index.php';
