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

$valid_hosts = array(
  'example.com',
  'www.example.com'
);

function is_valid_host ($hosts, $xforwardedhost) {

  return in_array($xforwardedhost, $hosts);

}


if ( isset( $_SERVER['HTTP_X_FORWARDED_HOST'] ) && $_SERVER['HTTP_X_FORWARDED_HOST'] && is_valid_host($valid_hosts, $_SERVER['HTTP_X_FORWARDED_HOST']) ) {
  $_SERVER['HTTP_HOST'] = $_SERVER['HTTP_X_FORWARDED_HOST'];
}
