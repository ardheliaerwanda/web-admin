<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Harga extends Model
{
    protected $table = 'harga';
    protected $fillable = ['nama_status', 'nama', 'deskripsi', 'group_id', 'produk_id'];
}
