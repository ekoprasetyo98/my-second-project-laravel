<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    // get from table 'siswa'
    protected $table = 'siswa';
    // choice column from table 'siswa' for insert or update data
    protected $fillable = ['nama','usia','alamat'];

    public function kontak(){
        // hasOne is function for relation with another table, and this function just call method from models
        return $this->hasOne('App\Models\Kontak');
    }
}
