<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    
    protected $table = 'users';
    protected $primaryKey = "id";

    protected $fillable = [
        'id',
        'name',
        'email',
        'phone_number',
        'password',
        'level',
        'created_at',
        'update_at',
    ];

    
    protected $hidden = [
        'password',
        'remember_token',
    ];

    
    const CREATED_AT = 'creation_at';
    const UPDATED_AT = 'updated_at';

    public function BarangMasuk(){
        return $this->belongsTo(BarangMasuk::class);
        
    }
    public function BarangKeluar(){
        return $this->belongsTo(BarangKeluar::class);
    }
    
}
