<?php
/**
 * Created by PhpStorm.
 * User: danieltaplin
 * Date: 27/10/18
 * Time: 4:21 PM
 */

class Message
{
    public $sender;
    public $recipient;
    public $message;
    public $date;

    public static function ListingSal($sender, $recipient, $message, $date) {
        $obj = new Message();
        $obj->sender = $sender;
        $obj->recipient = $recipient;
        $obj->message = $message;
        $obj->date = $date;
        return $obj;
    }
}