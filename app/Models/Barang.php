<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = "barang";
    protected $fillable = ['kode','nama'];

    public function barang_details(){
    
        return $this->hasMany('App\Models\Barang_Detail');
    }
    
}
