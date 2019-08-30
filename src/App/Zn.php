<?php

namespace App;

use Contract\Send;

class Zn implements Send
{
    public function send($to, $content)
    {
        return '【站内消息】发送给：' . $to . '|发送内容：' . $content;
    }
}