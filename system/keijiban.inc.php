<?php

require_once ('database.inc.php');

class Keijiban
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

    $sql = "SELECT * FROM tableTest";
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


  public function InsertData($title, $contents, $name, $date, $password)
  {
    $db = Database::getInstance();
    $sql = "INSERT INTO tableTest (title,content,name,created,updated,password) VALUES ('$title','$contents','$name','$date','$date','$password')";

    $db->query($sql);
  }

  public function DeleteDataByTitle($deleteTitle)
  {
    $db = Database::getInstance();
    $sql = "DELETE FROM tableTest WHERE `title`='$deleteTitle'";

    $db->query($sql);
  }

  public function DeleteDataByID($id2)
  {
    $db = Database::getInstance();
    $sql = "DELETE FROM tableTest WHERE `id`=$id2";

    $db->query($sql);
  }

  public function SelectContents($id)
  {
    $db = Database::getInstance();
    $sql = "SELECT id,content,password FROM tableTest WHERE `id`=$id";
    $dbres = $db->query($sql);

    $dbret = $dbres->fetch();
    if (!$dbret) {
        return FALSE;
    }
    return $dbret;
  }

  public function EditData($editContents, $id, $update)
  {
    $db = Database::getInstance();
    $sql1 = "UPDATE tableTest SET `content`='$editContents' WHERE `id`='$id'";
    $sql2 = "UPDATE tableTest SET `updated`='$update' WHERE `id`='$id'";
    $db->query($sql1);
    $db->query($sql2);
  }

  public function checkPass($passwords, $id)
  {
    $db = Database::getInstance();
    $sql = "SELECT password FROM tableTest WHERE `id`=$id"; 
    $correctPassword = $db->query($sql);
    if($correctPassword == $passwords){
        return true;
    }else{
        return false;
    }
  }

}
