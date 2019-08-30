<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/8/27
 * Time: 14:44
 */

namespace App;

use Contract\Info;
use Contract\Send;

class CommonInfo implements Info
{
    private $tool = null;

    public function __construct(Send $send)
    {
        $this->tool = $send;
    }

    public function msg($to, $content)
    {
        $new_content = '【普通消息】' . $content;

        return $this->tool->send($to, $new_content);
    }
}