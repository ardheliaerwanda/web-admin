<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggan';
    protected $fillable = ['kode_pelanggan','nama', 'tanggal', 'email', 'no_tlp','kota_id','group_id','Alamat','jenis_kelamin'];
}
