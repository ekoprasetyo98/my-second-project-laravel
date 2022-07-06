<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    use HasFactory;
    protected $table = 'kontak';
    protected $fillable = ['email','nomor_telepon'];
    public function siswa(){
        return $this->belongsTo('App\Models\Siswa');
    }
}
