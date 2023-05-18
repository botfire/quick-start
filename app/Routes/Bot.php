<?php

use botfire\botfire\Route;


Route::call('alert','BotController->alert');
Route::call('message','BotController->message');
Route::text('/start','BotController->mainMessage');


Route::notFound('BotController->mainMessage');