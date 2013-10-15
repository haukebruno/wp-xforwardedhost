<?php
/**
 * Plugin Name: wp-xforwardedhost
 * Plugin URI: http://haukebruno.de/wp-xforwardedhost
 * Description: Changes some URIs (e.g. pagination) into URIs referred to X_FORWARDED_HOST 
 * Version: 0.1
 * Author: Hauke Bruno Wollentin
 * Author URI: http://haukebruno.de
 * License: GPL2
 */

if ( isset( $_SERVER['HTTP_X_FORWARDED_HOST'] ) && $_SERVER['HTTP_X_FORWARDED_HOST'] ) {
  $_SERVER['HTTP_HOST'] = $_SERVER['HTTP_X_FORWARDED_HOST'];
}
