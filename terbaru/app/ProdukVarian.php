<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdukVarian extends Model
{
    protected $table = 'produkvar_table';
    protected $fillable = ['nama_produkvar', 'pilihanvar','harga_modal','harga_jual','carapilih'];
}
