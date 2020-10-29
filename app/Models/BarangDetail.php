<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangDetail extends Model
{
    use HasFactory;
    protected $table = "barang_detail";
    protected $fillable = ['kode_barang_detail','nama','barang_id'];

    
    public function barang_details(){
    
        return $this->belongsTo('App\Models\Barang');

    }
}
