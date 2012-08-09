<?php

/**
 * config.inc.php
 *
 */

// ディレクトリ設定
define('PROJECT_ROOT_DIR', dirname(dirname(__FILE__)));
define('SYSTEM_DIR',       constant("PROJECT_ROOT_DIR") . '/system');
define('LIB_DIR',          constant("PROJECT_ROOT_DIR") . '/lib');
define('VAR_DIR',          constant("PROJECT_ROOT_DIR") . '/var');
define('BIN_DIR',          constant("PROJECT_ROOT_DIR") . '/bin');
define('CACHE_DIR',        constant("VAR_DIR") . '/cache');




// database.inc.php
// 作成したDBの名前
//define("DATABASE_DBNAME",   "keijiban");
// ここは変えなくて良い
//define("DATABASE_HOST",     "localhost");

// phpmyadminログイン時のユーザ名
//define("DATABASE_USER",     "root");
// phpmyadminログイン時のパスワード
//define("DATABASE_PASSWORD", "60145048");





define('TWIG_CACHE_DIR', constant("CACHE_DIR") . '/Twig');
define('TWIG_TEMPLATE_DIR', constant("PROJECT_ROOT_DIR") . '/templates');


// デバッグ設定
ini_set('display_errors', 'On');
error_reporting(E_ALL & ~E_NOTICE);
