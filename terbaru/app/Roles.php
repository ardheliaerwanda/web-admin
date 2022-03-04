<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $table = 'roles';
    protected $fillable = [
    	'nama_role',
    ];

    public function user(){
    	$this->hasOne('App\User', 'role_id');
    }
}
