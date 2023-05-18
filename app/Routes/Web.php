<?php
use Webrium\Route;

Route::get('','IndexController->index');

Route::get('webhook/set','IndexController->setwebhook');
Route::any('run','IndexController->run');

Route::notFound();
