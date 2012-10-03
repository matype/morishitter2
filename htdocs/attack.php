<?php

require_once(dirname(dirname(__FILE__)) . '/system/common.inc.php');
require_once(dirname(dirname(__FILE__)) . '/system/twitteroauth/twitteroauth.php');
define('CONSUMER_KEY', 'H2uI7VbrPZniS7gSrJHROw');
define('CONSUMER_SECRET', 'XdejrdAIDeD3PFxiXBx1s7umeFlbOrCSk5hqyq4aA');

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
	
	if ($_POST['Fav_Attack']) {
	$others_id = $_POST['Fav_Attack'];
	$others2 = $client->get('statuses/user_timeline', array('user_id'=>$others_id, 'count'=>16));

		for($i = 0; $i < 15; $i++){
			$latest_15_id = $others2[$i]->id_str;
			$client->post("favorites/create/$latest_15_id");
		}
		$text_attack['attack_success'] = '!!!!! Fav Attack !!!!!';
		$Message->set('warning', '', $text_attack);
		$Message->alert();
	}



}


//$Twig->assign('follow', $follow);
echo $Twig->fetch('attack.html');