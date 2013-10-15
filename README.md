wp-xforwardedhost
=================

This mu-plugin checks the X_FORWARDED_HOST Header Field and uses it as HTTP_HOST if set.
Use wp-xforwardedhost if your requests don't reach your backend with the frontend base URL (e.g. pseudo subfolder domains, rewrited in load balancers/proxies).

# Installation

1. Create a directory 'mu-plugins' under *wp-content*
2. Put *wp-xforwardedhost.php* into it (double check file permissions)
3. Customize the *valid_hosts* array in line 12

# valid_hosts check

If you want to check X_FORWARDED_HOST against a list of valid hostnames (recommended), please fill in your hostnames (comma separated) in the *valid_hosts* array. Notice that there shouldn't be a comma after the last element!

# mu-plugins

For further information please see http://codex.wordpress.org/Must_Use_Plugins



