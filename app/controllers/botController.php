<?php
namespace app\controllers;

use botfire\botfire\bot;


class botController
{

  public function alert(){
    bot::this()->answerCallback(true)->text('Hello')->send();
  }

  public function message(){
    bot::this()->message("Message")->send();
  }

}
