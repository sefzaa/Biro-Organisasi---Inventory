<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';
    protected $guarded = ["id"];
    protected $fillable = [
        'id',
        'nama_barang',
        'stok',
        'created_at',
        'update_at',
    ];

    const CREATED_AT = 'creation_at';
    const UPDATED_AT = 'updated_at';

    public function BarangMasuk(){
        return $this->belongsTo(BarangMasuk::class);
        
    }
    public function BarangKeluar(){
        return $this->belongsTo(BarangKeluar::class);
        
    }
    public function Kategori(){
        return $this->belongsTo(Kategori::class);
    }


}
