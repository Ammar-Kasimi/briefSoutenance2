<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class invite extends Model
{
protected $fillable = ['email', 'token','collocation_id','user-id'];

 public function sender()belongs
}
