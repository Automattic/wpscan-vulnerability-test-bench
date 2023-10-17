<?php
/**
 * wpscan-poc-helper - Helper plugin for vulnerability testing
 * Copyright (C) 2023  Automattic, Inc
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * LICENSE file in the root of the repo for details.
 *
 * Plugin name: WPScan PoC Helper
 * Plugin slug: wpscan-poc-helper
 * Plugin URI: https://github.com/Automattic/wpscan-vulnerability-test-bench
 * Version: 0.1.0
 * Description: A plugin to help with proof-of-concept code and development.
 * Author: The WPScan Team
 * Author URI: https://wpscan.com
 * License: GPLv2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

require_once __DIR__ . '/include/auth-redirect.php';
require_once __DIR__ . '/include/object-injection.php';
