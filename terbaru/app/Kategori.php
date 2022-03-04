<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $fillable = ['nama_departemen', 'urutan','nama_departemen','jumlah_produk','status','nama_outlet'];
    public function catatProduks()
    {
        return $this->belongsToMany(CatatProduk::class, 'catat_produk_kategori', 'kategori_id', 'catat_produk_id');
    }
}
