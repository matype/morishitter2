<?php

/**
 * request.inc.php
 *
 * $_GET, $_POSTパラメータのラッパークラス
 *
 * @author  Yuichiro Mukai(y.iky917@gmail.com)
 * @created 2012/03/08
 */

class Request
{
    private static $_ins = null;

    public $get = array();
    public $post = array();
    
    public $method = "";
    public $http_host = "";
    
    private function __construct()
    {
        foreach ($_GET as $key => $value) {
            $this->get[$key] = rawurldecode($value);
        }
        
        $this->post = $_POST;
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->http_host = $_SERVER['HTTP_HOST'];
    }
    
    // シングルトンモデル
    public static function getInstance()
    {
        if (self::$_ins === null) {
            self::$_ins = new self();
        }
        
        return self::$_ins;
    }
    
    public function isGet()
    {
        return (stripos($this->method, "get") !== FALSE) ? TRUE : FALSE;
    }

    public function isPost()
    {
        return (stripos($this->method, "post") !== FALSE) ? TRUE : FALSE;
    }
    
    /**
     * 
     */
    public function getNextURL()
    {
        if (empty($this->get['next_url'])) {
            return FALSE;
        }
        
        $parsed_url = parse_url($this->get['next_url']);
        
        // next_urlの検証を行う
        
        // schemeは, http or https
        if ($parsed_url['scheme'] != 'http' && $parsed_url['scheme'] != 'https') {
            return FALSE;
        }
        
        // クロスドメインへのリダイレクトはしない (クロスドメインが必要な場合はここをいじる)
        if ($parsed_url['host'] != $this->http_host) {
            return FALSE;
        }
        
        // URLを再構築
        $ret =  $parsed_url['scheme'] . '://' . $this->http_host . $parsed_url['path'];
        // query string
        if (!empty($parsed_url['query'])) {
            $ret .= '?' . $parsed_url['query'];
        }
        // fragment
        if (!empty($parsed_url['fragment'])) {
            $ret .= '#' . $parsed_url['fragment'];
        }
        
        return $ret;
    }    
}
