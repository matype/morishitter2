<?php

require_once(dirname(dirname(__FILE__)) . '/system/common.inc.php');
require_once(dirname(dirname(__FILE__)) . '/system/twitteroauth/twitteroauth.php');
define('CONSUMER_KEY', 'H2uI7VbrPZniS7gSrJHROw');
define('CONSUMER_SECRET', 'XdejrdAIDeD3PFxiXBx1s7umeFlbOrCSk5hqyq4aA');

$tweet = $_POST['tweet'];

session_start();
if (!($_SESSION['access_token'] && $_SESSION['access_token_secret'])) {
  $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $_SESSION['oauth_token'], $_SESSION['oauth_token_secret']);
  $token = $connection->getAccessToken($_GET['oauth_verifier']);

  $_SESSION['access_token'] = $token['oauth_token'];
  $_SESSION['access_token_secret'] = $token['oauth_token_secret'];
}
if($_POST) {
  $params = array(
    'status' => $tweet/* . "ʅ（´◔౪◔）ʃ"*/
  );

  $client = new TwitterOAuth(
    $consumer_key, $consumer_secret,
    $_SESSION['access_token'], $_SESSION['access_token_secret']
  );
  //  var_dump($client);

  $result = $client->post('statuses/update', $params);
  if($result) {
    $text['success'] = 'Your tweet has been sent.';
    $Message->set('info', '', $text);
    $Message->alert();
  }
//  var_dump($result);
}

//$Twig->assign('hoge', $result);
echo $Twig->fetch('tweet.html');
