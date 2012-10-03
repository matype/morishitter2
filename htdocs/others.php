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
	$user_id = $_GET['id'];

	$others = $client->get('statuses/user_timeline', array('screen_name'=>$user_id, 'count'=>50));
	
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

if ($_POST['Fav_Attack']) {
	
	$others_name = $_POST['Fav_Attack'];
	
	$others2 = $client->get('statuses/user_timeline', array('user_id'=>$others_neme, 'count'=>15));

	for($i = 0; $i < 15; $i++){
		$latest_15_id = $others2[$i]->id_str;
		$client->post("favorites/create/$latest_15_id");
	}
	$text_attack['attack_success'] = '!!!!! Fav Attack !!!!!';
	$Message->set('warning', '', $text_attack);
	$Message->alert();
}


//$user_id = $_GET['id'];
//var_dump($user_id);exit;
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

//$my_fav = $connection->get('statuses/show');
//var_dump($my_fav);

$Twig->assign('others', $others);
echo $Twig->fetch('others.html');
