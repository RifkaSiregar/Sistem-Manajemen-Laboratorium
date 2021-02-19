<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'pengguna';
    protected $fillable = ['nama_lengkap','email','jenis_kelamin','agama','alamat','avatar'];

    public function getAvatar()
    {
        if(!$this->avatar){
            return asset('images/default.jpg');
        }

        return asset('images/' .$this->avatar);
    }
}
