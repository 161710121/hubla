<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class x extends Model
{
    protected $table = 'xes';
    protected $fillable = ['kode_barang','nama_barang','harga'];
}
