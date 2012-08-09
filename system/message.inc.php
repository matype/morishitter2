<?php

/**
 * message.inc.php
 *
 * セッションを用いた、ステートフルなメッセージ管理クラス
 * common.inc.phpからrequireされている必要がある
 *
 * @author  Yuichiro Mukai(y.iky917@gmail.com)
 * @created 2012/03/09
 */
class Message
{
    private static $_ins = null;
    private static $_ins_ses = null;
    private static $_session_key = "__SESSION_MESSAGE";

    private function __construct()
    {
    }

    // シングルトンモデル
    public static function getInstance()
    {

        if (self::$_ins === null) {
            self::$_ins = new self();
        }

        require_once 'session.inc.php';
        if (self::$_ins_ses === null) {
            self::$_ins_ses = Session::getInstance();
        }
        //var_dump($_ins_ses);

        return self::$_ins;
    }

    public function set($type, $heading, $content)
    {
        $message = array(
            'type' => $type,
            'heading' => $heading,
            'content' => $content
        );

        self::$_ins_ses->set(self::$_session_key, $message);
        return self::$_ins;
    }

    public function get()
    {
        return self::$_ins_ses->get(self::$_session_key);
    }

    public function delete()
    {
        self::$_ins_ses->delete(self::$_session_key);
    }

    public function notEmpty()
    {
        return self::$_ins_ses->notEmpty(self::$_session_key);
    }

    // Message::set()によりセットされたメッセージをアラートする
    public function alert()
    {
        global $Twig;
        if (!$Twig) {
            return FALSE;
        }

        if (!$this->notEmpty()) {
            return FALSE;
        }

        $message = $this->get();
        $this->delete();

        $Twig->assign('MESSAGE_ALERT', $message);
    }
}
