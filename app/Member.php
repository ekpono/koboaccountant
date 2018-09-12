<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Uuid;
class Member extends Model
{
    public $incrementing = false;

    public function generateUuid()
    {
        return Uuid::generate(5,str_random(5), Uuid::NS_DNS);
    }
}
