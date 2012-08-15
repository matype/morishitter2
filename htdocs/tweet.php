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
if (($_SESSION['access_token'] && $_SESSION['access_token_secret'])) {
  $client = new TwitterOAuth(
    CONSUMER_KEY, CONSUMER_SECRET,
    $_SESSION['access_token'], $_SESSION['access_token_secret']
  );
  $data = $client->get('statuses/home_timeline');
  /*
  foreach ($data as $d) {
    print '<pre>';
    var_dump($d);
    print '</pre';
    exit;
   // echo $d->user->screen_name . " : " .  $d->text . "<br/>";
  }
   */
  if ($_POST) {
    $params = array(
      'status' => $tweet/* . "ʅ（´◔౪◔）ʃ"*/
    );
    $result = $client->post('statuses/update', $params);
    if ($result) {
      $text['success'] = 'Your tweet has been sent.';    
      $Message->set('info', '', $text);
      $Message->alert();
    }
  }
}

$reply = $_POST['reply'];
$Twig->assign('reply', $reply);

if ($_POST['fav']) {
  $fav = $_POST['fav'];
  $result_fav = $client->post("favorites/create/$fav");

  $text_fav['fav_success'] = 'Add to your Favorites.';
  $Message->set('warning', '', $text_fav);
  $Message->alert();
}


if ($_POST['RT']) {
  $RT = $_POST['RT'];
  $result_RT = $client->post("statuses/retweet/$RT");

  $text_RT['RT_success'] = 'This tweet has been Retweeted.';
  $Message->set('success', '', $text_RT);
  $Message->alert();
}

$Twig->assign('data', $data);
echo $Twig->fetch('tweet.html');
