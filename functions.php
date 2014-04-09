<?php
/*
Author: Long Duong
URL: http://houstondeafnetwork.com

This place is much cleaner. Put your theme specific codes here,
anything else you may wan to use plugins to keep things tidy.

*/

/*
1. lib/clean.php
    - head cleanup
	- post and images related cleaning
*/
require_once('lib/clean.php'); // do all the cleaning and enqueue here

/*
2. lib/enqueue.php
    - enqueueing scripts & styles
*/
require_once('lib/enqueue.php'); // to deregister or register styles & scripts

/*
3. lib/bootstrap.php
	- add pagination
	- custom walker for top-bar and related
*/
require_once('lib/bootstrap.php'); // load Foundation specific functions like top-bar

/*
4. lib/themeconfig.php
    - basic theme support
	- author contact info
	- widget stuff
	- entry meta
	- search config
	- excerpt config
	- credit
*/
require_once('lib/themeconfig.php'); // load theme supports

/*
5. lib/shoutout.php
    - template for comments and ping backs
*/
require_once('lib/shoutout.php'); // comment stuff

/*
6. lib/extra.php
    - PBD AJAX Load Post
    - Events Manager Plugin
    - USP Plugin
*/
require_once('lib/extra.php'); // load plugins support

?>