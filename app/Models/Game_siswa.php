<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game_siswa extends Model
{
    protected $table = 'game_siswa';
    protected $fillable = [
        'siswa_id',
        'game_id',
        'nilai',
    ];
}
