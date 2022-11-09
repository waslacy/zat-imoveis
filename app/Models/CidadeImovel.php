<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CidadeImovel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'estado'
    ];

    public function bairro(){
        return $this->hasMany(BairroImovel::class);
    }
}