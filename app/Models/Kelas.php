<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $guard = 'kelas';
    protected $table = 'kelas';
    protected $fillable = ['namakelas','users_id','siswa_id'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }
    public function siswaa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
