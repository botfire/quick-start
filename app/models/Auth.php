<?php
namespace app\models;

use webrium\foxql\DB;

class Auth{

  public function user($id)
  {
    return DB::table('users')->cache('user',function ($q)
    {
      return $q->find($id);
    });
  }
}
