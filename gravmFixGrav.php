<?php

/**
 * @package    GravMultisite
 *
 * @copyright  Copyright (c) 2021 Levitation, LLC. All rights reserved.
 * @license    MIT License; see LICENSE file for details.
 */

/**
 * Fix known inaccuracies in Grav source
 */

/**
 * Fix inaccuracy in Grav class `Grav/Common/Errors/Errors.php`
 * Line ~53 contains hard-coded path which may conflict with streams setup:
 * 		$error_page->addResourcePath(GRAV_ROOT . '/system/assets');
 * It should be replaced by a path defined with streams:
 *		$error_page->addResourcePath($grav['locator']->getResource('system://assets'));
 *
 * @return bool TRUE - inaccuracies found and fixed, FALSE - inaccuracies not found (already fixed)
 */
function gravmFixGrav(string $gravPath, bool $checkNewCode = true): bool
{
	$file = $gravPath . '/system/src/Grav/Common/Errors/Errors.php';

	if (false === ($content = file_get_contents($file))) {
		throw new Exception(__FUNCTION__ . "(): Can't read file `$file`");
	}

	$old = "GRAV_ROOT . '/system/assets'";
	$new = '$' . "grav['locator']->getResource('system://assets')";
	$cnt = 0;
	$content = str_replace($old, $new, $content, $cnt);

	if (0 === $cnt) {
		// Old code not found - check new code existence
		if ($checkNewCode and false === strpos($content, $new, 1300)) {
			throw new Exception(__FUNCTION__ . "(): Can't find neither old nor new code in source file `$file`");
		}
		// Already fixed - old code not found while new code have been found
		return false;
	}

	if (1 === $cnt) {	// Fix made - save changes in Grav install
		if (false === file_put_contents($file, $content)) {
			throw new Exception(__FUNCTION__ . "(): Can't write file `$file`");
		}
		return true;
	}

	throw new Exception(__FUNCTION__ . "(): Unknown structure of Grav source file `$file`");
}
