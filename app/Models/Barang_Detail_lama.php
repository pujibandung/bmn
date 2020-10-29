<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang_Detail extends Model
{
    use HasFactory;
    protected $table = "barang_detail";

    public function barang(){
      //  return $this->belongsTo('App\Models\Barang');
      //  return $this->BelongsTo(Mahasiswa::class,'barang_id');
        return $this->belongsTo('App\Models\Barang');
    }
}
