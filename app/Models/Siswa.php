<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class Siswa extends Authenticatable
{

    use HasApiTokens, HasFactory;

    protected $guard = 'siswa';
    protected $table = 'siswa';
    protected $fillable = ['nis','password','namasiswa','kelas_id'];

    public function game()
    {
        return $this->belongsToMany(Game::class)->withPivot(['nilai','created_at','updated_at']);
    }
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }
}

