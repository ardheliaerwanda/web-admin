<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';
    protected $fillable = ['nama', 'jenis_kelamin', 'Alamat', 'user_id', 'email', 'no_tlp'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
