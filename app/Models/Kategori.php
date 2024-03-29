<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';
    protected $guarded = ["id"];

    protected $fillable = [
        'id',
        'nama_kategori',
        'created_at',
        'update_at'
    ];

    const CREATED_AT = 'creation_at';
    const UPDATED_AT = 'updated_at';

    public function Barang(){
        return $this->hasMany(Barang::class);
    }

}