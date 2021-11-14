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
					'site://' . GRAV_USER_PATH . '/plugins',
					'grav://' . GRAV_USER_PATH . '/plugins',
				],
			],
			'plugin' => [					// synonym for `plugins` stream (used by `Admin` plugin)
				'type' => 'ReadOnlyStream',
				'paths' => 'plugins://',
			],
			'themes' => [
				'type'	=> 'ReadOnlyStream',
				'paths' => [
					'site://' . GRAV_USER_PATH . '/themes',
					'grav://' . GRAV_USER_PATH . '/themes',
				],
			],
		],
	],
];
