<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ojol extends Model
{
    protected $table = 'ojol';
    protected $fillable = ['nama_outlet', 'status', 'nama', 'deskripsi'];

    public function catatProduks()
    {
        return $this->belongsToMany(CatatProduk::class, 'catat_produk_ojol', 'ojol_id', 'catat_produk_id');
    }
}
