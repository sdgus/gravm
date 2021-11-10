<?php

/**
 * @package    GravMultisite
 *
 * @copyright  Copyright (c) 2021 Levitation, LLC. All rights reserved.
 * @license    MIT License; see LICENSE file for details.
 */

/**
 * @var array Initial streams to override defaults in `Grav/Common/Config/Setup.php`
 */
return [
	'streams' => [
		'schemes' => [
			'site' => [						// GravM site
				'type'	=> 'ReadOnlyStream',
				'paths'	=> '',
			],
			'grav' => [						// Grav install
				'type'	=> 'ReadOnlyStream',
				'paths'	=> GRAVM_SITE_GRAV,	// Relative-only path from site to grav install
			],
			'user' => [
				'type' => 'ReadOnlyStream',
				'paths' => 'site://' . GRAV_USER_PATH,
			],
			'system' => [
				'type'	=> 'ReadOnlyStream',
				'paths' => 'grav://' . GRAV_SYSTEM_PATH,
			],
			'plugins' => [
				'type' => 'ReadOnlyStream',
				'paths' => [
					'site://plugins',		// GravM site-only plugins could be located in site root
					'site://user/plugins',	// ... or in site/user (default Grav plugins location)
					'grav://user/plugins',
				],
			],
			'plugin' => [					// synonym for `plugins` stream (used by `Admin` plugin)
				'type' => 'ReadOnlyStream',
				'paths' => 'plugins://',
			],
			'themes' => [
				'type'	=> 'ReadOnlyStream',
				'paths' => [
					'site://themes',		// GravM site-only themes could be located in site root
					'site://user/themes',	// ... or in site/user (default Grav themes location)
					'grav://user/themes',
				],
			],
		],
	],
];
