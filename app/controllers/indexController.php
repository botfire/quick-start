<?php
namespace app\controllers;
use botfire\botfire\bot;


class indexController
{

  /*
  |======================
  |     توکن ربات شما
  |======================
  | توکن ربات خود را قرار دهید
   */
  public $token = 'Replace-with-your-robot-token' ;

  /*
  |====================================
  |      نحوه راه اندازی ربات
  |====================================
  | پس از این که توکن ربات خود را قرار دادید
  | پروژه را روی سرور خود آپلود کنید
  | سپس با توجه به نام دامین خود آدرس زیر را در مرورگر خود اجرا کنید
  |
  | URL = https://example.com/webhook/set
   */


  /**
   * آدرس سرور ما را به تلگرام معرفی میکند
   * پس از آن تلگرام درخواست ها را به سرور ما ارسال می کند
   * @return json
   */
  public function setwebhook()
  {
    bot::token($this->token);
    return bot::webhook()->url( url('run') )->set();
  }


  /**
   * زمانی که کاربری در ربات شما عملیاتی انجام میدهد
   * اطلاعات توسط این تابع دریافت و پردازش می شود
   * و در نهایت پاسخ کاربر ارسال می شود
   */
  public function run()
  {

    bot::token($this->token);
    bot::autoInput();



    // ایجاد کیبورد یا همان لینک شیشه ای
    $k = bot::keyboard();
    $k->btnUrl('کتابخانه بات فایر','https://github.com/botfire/botfire');
    $k->btnUrl('آدرس کانال یوتیوب','https://www.youtube.com/channel/UCN0h9VCzj7qZjMZVhZKF8wg');
    $k->row();

    // ارسال پیام تست همراه با کیبورد
    bot::this()->message("Hello World \n ربات شما راه اندازی شد ✅")->keyboard($k)->send();

    // code ..

  }

}
