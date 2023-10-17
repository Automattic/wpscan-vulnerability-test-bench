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
 * Check for the 'check_login' param on init, and call auth_redirect if
 * present.
 *
 * The main purpose of this action is to check that security plugins thet try
 * to hide the WordPress login page also hides it when the auth_redirect
 * function is called..
 */
function wpscan_poc_handle_check_login_param() : void {
	if ( isset( $_REQUEST[ 'check_login' ] ) ) {
		auth_redirect();
	}
}

add_action( 'init', 'wpscan_poc_handle_check_login_param' );
