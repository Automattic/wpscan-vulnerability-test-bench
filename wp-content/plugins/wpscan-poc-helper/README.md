# Helper plugin for proof-of-concept development and testing

This plugin is part of the WPScan vulnerability test banch, and simply installs
some code that will help to demonstrate certain classes of vulnerabilities.
This is currently limited to PHP Object injection vulnerabilities, and
bypassing hidden login pages by using the WordPress `auth_redirect()` function.

## PHP Object Injection

The plugin provides a simple class `Evil` that will halt the request with a
message, as well as log the message to the web server logs when attempted to be
deserialized.

When testing for insecure use of the PHP `unserialize()` function, you can use
the following payload to test fort the vulnerability:

```
O:4:"Evil":0:{};
```

If the code you're testing is vulnerable to this attack, you should get the
message `[*] Evil object unserialize! BOOM!` in the returned web page, and in
the logs.


## Bypass hidden login page via `auth_redirect`

While we don't consider the location of the WordPress login page sensitive
information, it can be a good hardening measure to make it less obvious. A
number of security plugins have a feature that will hide the login page for
you.

A typical bypass for this is if there are other plugins on the site which will
call the WordPress function `auth_redirect()`, which will redirect a visitor to
the login page if they're not already logged in.

To make it easier to provide a consistent proof-of-concept for these cases,
this plugin will check for the `check_login` parameter on init, and if present
will call the `auth_redirect()` function.

If you're redirected to the login page, the hide login page functionality of
the security plugin you're testing is vulnerable to this bypass.


## Anything missing?

If you have suggestions for other functionality that would be useful to have
when demonstrating proof-of-concept for WordPress vulnerabilities, feel free to
leave a suggestion in the issue tracker, or pop a pull request.

The WPScan Team
