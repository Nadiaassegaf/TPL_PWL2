<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $fillable = [
        'supplier_id',
        'nama_produk',
        'harga',
        'stok'
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}