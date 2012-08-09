<?php

require_once (dirname(__FILE__) . '/config.inc.php');

require_once (constant("SYSTEM_DIR") . '/twig.inc.php');
$Twig = new Twig();

// Twigの定数設定
// HTTP_HOST
$Twig->assign('HTTP_HOST', $_SERVER['HTTP_HOST']);
// css, js, imgが存在するディレクトリ
$Twig->assign('ASSETS_DIR', '../htdocs');


// →→→　　　　　　　　　　　　　　　　↓自分で作成するsystem/~~.inc.php
//require_once (constant("SYSTEM_DIR") . '/test.inc.php');
//require_once (constant("SYSTEM_DIR") . '/keijiban.inc.php');
//↓そこで作成したクラス
//↓　　と　↓
//$Test = Test::getInstance();
//$Keijiban = Keijiban::getInstance();

require_once (constant("SYSTEM_DIR") . '/request.inc.php');
$Request = Request::getInstance();

require_once (constant("SYSTEM_DIR") . '/message.inc.php');
$Message = Message::getInstance();

// メッセージがプッシュされている場合は、アラート
if ($Message->notEmpty()) {
    $Message->alert();
}
