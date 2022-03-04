<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'group';
    protected $fillable = ['nama_group','nama_status','deskripsi','urutan','pelanggan_id','harga_id'];
}
