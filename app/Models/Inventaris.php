<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    use HasFactory;
    protected $table = 'inventori';
    protected $guarded = ["id"];

    protected $fillable = [
        'id',
        'barang',
        'merk',
        'tipe',
        'tahun',
        'created_at',
        'update_at'
    ];

    const CREATED_AT = 'creation_at';
    const UPDATED_AT = 'updated_at';
}
