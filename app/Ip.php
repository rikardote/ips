<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ip extends Model
{
	 protected $table = 'data';
     protected $fillable = ['ip', 'user', 'ubicacion_id', 'machine_name', 'machine_password'];
}
