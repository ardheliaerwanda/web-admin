<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatatProduk extends Model
{
    protected $table = 'catat_produk';
    protected $fillable = ['nama_produk', 'harga', 'deskripsi', 'foto','nama_kategori','nama_satuan','harga_jual','sku','nama_produkvar','nama_group'];

    public function setPhoto($file)
    {
        $filename = time() . '_' . $file->getClientOriginalName();
        if (!file_exists(public_path('admin/assets/produk'))) {
            mkdir(public_path('admin/assets/produk'), 0777, true);
        }
        $destinationPath = public_path('/admin/assets/produk');
        $file->move($destinationPath, $filename);

        return $filename;
    }

    public function removePhoto($filename)
    {
        $path = public_path('admin/assets/produk/' . $filename);
        if (file_exists($path)) {
            unlink($path);
        }
    }
}
