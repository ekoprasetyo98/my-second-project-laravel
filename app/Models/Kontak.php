<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    use HasFactory;
    // get from table 'kontak'
    protected $table = 'kontak';
    // choice column from table 'kontak' for insert or update data
    protected $fillable = ['email','nomor_telepon'];
    // belongsTo() is function for relation with another table, and this function just call method from models
    public function siswa(){
        return $this->belongsTo('App\Models\Siswa');
    }
}
