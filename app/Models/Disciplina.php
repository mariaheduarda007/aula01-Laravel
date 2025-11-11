<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    use SoftDeletes; // uma função de uma classe do framework - otimiza o codigo

    public function curso(){
        return $this->belongsTo('\App\Models\Curso');
    }
}
