<?php

require_once(dirname(dirname(__FILE__)) . '/system/twitteroauth/twitteroauth.php');

session_start();
define('CONSUMER_KEY', 'H2uI7VbrPZniS7gSrJHROw');
define('CONSUMER_SECRET', 'XdejrdAIDeD3PFxiXBx1s7umeFlbOrCSk5hqyq4aA');

$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET);

$request_token = $connection->getRequestToken("http://localhost/~morishitamasaaki/ikasama/morishitter/htdocs/tweet.php");
$_SESSION['oauth_token'] = $token = $request_token['oauth_token'];
$_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];
$auth_url = $connection->getAuthorizeURL($token, FALSE);

header ("Location: $auth_url");
