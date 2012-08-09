<?php

require_once ('database.inc.php');

class Test
{
  private static $__instance = NULL;

  // Singleton
  public static function getInstance()
  {
    if (self::$__instance === NULL) {
      self::$__instance = new self();
    }

    return self::$__instance;
  }

  private function __construct()
  {

  }

  public $contents = array();
  public $pos      = 0;
  public $last     = 0;

  public function fetchAll()
  {
    $ret = array();
    while ($ret_ = $this->fetch()) {
      $ret[] = $ret_;
    }
    return $ret;
  }


  // サンプルメソッド
  public function getPost()
  {
    $db = Database::getInstance();

    // テーブル名変えて
    $sql = "SELECT * FROM `テーブルの名前`";
    $dbres = $db->query($sql);
    $dbret = $dbres->fetchAll();
    if (!$dbret) {
      return FALSE;
    }
    return $dbret;
    /*
    if (!($dbret = $db->fetch($db->query($sql, array('id' => $id))))) {
      return False;
    }
    return $dbret;
     */
  }
}
