<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = ['nis','password','namasiswa','kelas'];

    public function game()
    {
        return $this->belongsToMany(Game::class)->withPivot(['nilai','created_at','updated_at']);
    }

}

