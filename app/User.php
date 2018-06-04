<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends \Cartalyst\Sentinel\Users\EloquentUser
{
    protected $loginNames = ['no_academic'];
}
