<?php
namespace Contract;
interface Send
{
	public function send($to,$content);
}