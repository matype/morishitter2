<?php

/**
 * database.inc.php
 *
 * @author Yuichiro Mukai (y.iky917@gmail.com)
 */

require_once ('config.inc.php');
class Database
{

  // Singleton
  private static $__instance = array();


  public static function getInstance($dbname = DATABASE_DBNAME, $dbhost = DATABASE_HOST, $dbuser = DATABASE_USER, $dbpass = DATABASE_PASSWORD)
  {
    $instance_id = md5($dbname . ':' . $dbhost . ':' . $dbuser . ':' . $dbpass);
    if (!isset(self::$__instance[$instance_id]) || self::$__instance[$instance_id] === NULL) {
      self::$__instance[$instance_id] = new self($dbname, $dbhost, $dbuser, $dbpass);
    }
    return self::$__instance[$instance_id];
  }

  public $dbname = "";
  public $host   = "";
  public $dsn    = "";
  public $dbh    = NULL;

  private function __construct($dbname, $host, $user, $password)
  {
    $this->dbname = $dbname;
    $this->host   = $host;
    $this->dsn    = "mysql:dbname={$this->dbname};host={$this->host}";

    try {
      $this->dbh = new PDO($this->dsn, $user, $password);
    } catch (PDOException $e) {
      // Error
      echo '<!--' . var_dump($e->getMessage()) . '-->';
    }
  }

  public function query($sql, $params = array())
  {
    try {
      $stmt = $this->dbh->query("SET NAMES utf8;");
      $stmt = $this->dbh->prepare($sql);
      if (is_array($params) && count($params) > 0) {
        foreach ($params as $key => $val) {
          if (preg_match("/^[a-zA-Z0-9]+$/", $key) && strpos($sql, ":{$key}") !== false) {
            $stmt->bindParam(":{$key}", $val);
          }
        }
      }
      //      $stmt->execute();
      $stmt->execute($params);
      return $stmt;
    } catch (PDOException $e) {
      echo '<!--' . var_dump($e->getMessage()) . '-->';
      return FALSE;
    }
  }

  public function fetch($stmt)
  {
    try {
      return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo '<!--' . var_dump($e->getMessage()) . '-->';
      return FALSE;
    }
  }
}
