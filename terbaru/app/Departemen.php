<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departemen extends Model
{
    protected $table = 'departemen';
    protected $fillable = ['nama_departemen', 'urutan', 'jumlah_kategori'];

    public function kategoris()
    {
        return $this->belongsToMany(Kategori::class, 'kategori_departemen', 'departemen_id', 'kategori_id');
    }
}
