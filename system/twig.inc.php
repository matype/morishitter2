<?php

/**
 * A Wrapper class for Twig
 *
 * @author Yuichiro Mukai(y.iky917@gmail.com)
 *
 */
require_once LIB_DIR . '/Twig/Autoloader.php';
Twig_Autoloader::register();

class Twig
{
  // Singleton Pattern
  /*
  private static $__instance = NULL;
  public static function getInstance(array $params = array())
  {
    if (self::$__instance === NULL) {
      self::$__instance = new self($params);
    }

    return self::$__instance;
  }
   */

  public $loader = NULL;
  public $twig = NULL;
  public $assigned_values = array();
  public function __construct($params = array())
  {
    $default = array(
      'template_dir' => constant("TWIG_TEMPLATE_DIR") . '/html',
      'cache' => constant("TWIG_CACHE_DIR"),
      'debug' => True
    );

    $params = $params + $default;
    $this->loader = new Twig_Loader_Filesystem($params['template_dir']);

    unset($params['template_dir']);
    $this->twig = new Twig_Environment($this->loader, $params);

    // Add Extension
    $this->twig->addExtension(new Twig_Extension_Debug());
  }

  public function assign($key, $val)
  {
    $this->assigned_values[$key] = $val;
  }

  public function fetch($template_path)
  {
    return $this->twig->render($template_path, $this->assigned_values);
  }
}
