<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    protected $table = 'deposit';
    protected $fillable = ['nama_outlet', 'nama','harga_jual','masa_berlaku','status','foto','nominal_deposit','nama_produk'];

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
