<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';
    protected $guarded = [];
 

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    // public function BarangMasuk(){
    //     return $this->hasMany(BarangMasuk::class);
        
    // }
    public function BarangKeluar(){
        return $this->hasMany(BarangKeluar::class);
        
    }
    // public function Kategori(){
    //     return $this->hasMany(Kategori::class);
    // }


}
