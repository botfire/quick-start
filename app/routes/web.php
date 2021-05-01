<?php
use webrium\core\Route;


Route::get('webhook/set','indexController->setwebhook');

Route::any('run','indexController->run');

Route::notFound();
