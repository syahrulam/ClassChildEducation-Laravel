<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKuis extends Model
{
    protected $table = 'data_kuis';
    protected $fillable = ['soal','katagorigame_id','a','b','c','d','jawaban','bobot_soal', 'image_name', 'image_path',];
}
