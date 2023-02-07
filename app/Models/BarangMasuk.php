<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    use HasFactory;
    protected $table = "barang_masuk";
    protected $guarded = ["id"];
    protected $fillable = [
        'id',
        'harga',
        'jumlah_barangKeluar',
        'keterangan','file', 
        'created_at',
        'update_at'
    ];
    
    const CREATED_AT = 'creation_at';
    const UPDATED_AT = 'updated_at';

    public function Barang(){
        return $this->hasMany(Barang::class);
    }
    public function User(){
        return $this->hasMany(User::class);
    }
}
