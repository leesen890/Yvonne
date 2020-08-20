<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';

     protected $fillable = ['id','username','password','nickname','email','phonenumber'];
}
