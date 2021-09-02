<?php
namespace app\controllers;

use botfire\botfire\bot;


class botController
{

  public function mainMessage(){
    $k = bot::keyboard();
    $k->btnUrl('کتابخانه بات فایر','https://github.com/botfire/botfire')->row();
    $k->btnUrl('آدرس کانال یوتیوب','https://www.youtube.com/channel/UCN0h9VCzj7qZjMZVhZKF8wg')->row();
    $k->btn('🔰 Show Alert','alert')->row();
    $k->btn('🔰 Send Message','message')->row();

    // ارسال پیام تست همراه با کیبورد
    bot::this()->message("Hello World \n ربات شما راه اندازی شد ✅")->keyboard($k)->send();
  }

  public function alert(){
    bot::this()->answerCallback(true)->text('Hello')->send();
  }

  public function message(){
    bot::this()->message("Message")->send();
  }

}
