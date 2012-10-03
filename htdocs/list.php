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

  $lists = $client->get('lists');
  $lists = $lists->lists;
/*
  print '<pre>';
  var_dump($lists);
  print '</pre>';
  exit;
*/
if ($_POST['Fav_Attack']) {
  for($i = 0; $i < 10; $i++){
    $latest_10_id = $data[$i]->id_str;
    $client->post("favorites/create/$latest_10_id");
  }
  $text_attack['attack_success'] = '!!!!! Fav Attack !!!!!';
  $Message->set('warning', '', $text_attack);
  $Message->alert();
}

if ($_POST['tweet']) {
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

if ($_POST['reply']) {
  $reply = $_POST['reply'];
  $reply_fav = $_POST['reply_fav'];
  //var_dump($reply_fav);
  //var_dump($reply);exit;
  $fav_reply = $client->post("favorites/create/$reply_fav");
  $Twig->assign('reply', $reply);
}

if ($_POST['fav']) {
  $fav = $_POST['fav'];
  $result_fav = $client->post("favorites/create/$fav");

  $text_fav['fav_success'] = 'Add to your Favorites.';
  $Message->set('warning', '', $text_fav);
  $Message->alert();
}


if ($_POST['RT']) {
  $RT = $_POST['RT'];
  $client->post("favorites/create/$RT");
  $result_RT = $client->post("statuses/retweet/$RT");

  $text_RT['RT_success'] = 'This tweet has been Retweeted.';
  $Message->set('success', '', $text_RT);
  $Message->alert();
}

/*
function getNextLastId($data) {
  $last_data = end($data);
  $param = array("max_id" => $last_data_id);
  $next_data = $client->get('statuses/home_timeline', $param);
  return $next_data->id;
}
*/

if (array_key_exists('more', $_POST)) {
  $more = $_POST['more'];
  $last = end($data);
  //var_dump($last->id);
  $param2 = array("max_id" => $last->id, "count" => 50);
  $next_data = $client->get('statuses/home_timeline', $param2);
  //$next_id = end($next_data)->id;   
  foreach ($next_data as $next) {
    $data[] = $next;
  }
  /*
  echo '<pre>';
  var_dump($data);
  echo '</pre>';exit;
  */
}

$Twig->assign('lists', $lists);
echo $Twig->fetch('list.html');