<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

//引入trait
use Illuminate\Auth\Authenticatable as TraitAuthenticatable;

use Illuminate\Contracts\Auth\Authenticatable;

class Manager extends Model implements Authenticatable
{
    protected $table = "manager";

    //trait
    use TraitAuthenticatable;
}
