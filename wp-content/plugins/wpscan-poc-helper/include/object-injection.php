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
 */

/**
 * This serves as a terminator for object injection attacks.
 *
 * Just pass in the following serialized payload where a object injection vulnerability
 * is present:
 *
 * O:4:"Evil":0:{};
 */
class Evil {
	public function __wakeup() : void {
		/*
		 * We send the output both to the default error log, and
		 * the rendered page. In some cases where the response isn't
		 * renderes, such as in ajax calls, we still get the indicator
		 * in the webserver logs.
		 */
		error_log( "[*] Evil object unserialize! BOOM!" );
		die( "[*] Evil object unserialize! BOOM!");
	}
}
