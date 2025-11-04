<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use SoftDeletes; // uma função de uma classe do framework - otimiza o codigo

    public function aluno(){
        return $this->hasMany('\App\Models\Aluno');
    }
}
