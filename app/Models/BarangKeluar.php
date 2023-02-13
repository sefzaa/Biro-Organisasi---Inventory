<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    use HasFactory;
    protected $table = "barang_keluar";
    protected $guarded = ["id"];
    protected $fillable = [
        'id',
        'nama_barang',
        'merk',
        'jumlah_barangKeluar',
        'keterangan',
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
