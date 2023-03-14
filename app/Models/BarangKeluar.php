<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    use HasFactory;
    protected $table = "barang_keluar";
    protected $guarded = [];
  
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    


    // public function Barang(){
    //     return $this->belongsTo(Barang::class);
    // }

    // public function User(){
    //     return $this->belongsTo(User::class);
    // }
}
