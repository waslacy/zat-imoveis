<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bairro extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'Cidade_id'
    ];

    public function cidade(){
        return $this->belongsTo(CidadeImovel::class);
    }

    public function imovel(){
        return $this->hasMany(Imovel::class);
    }

    public function condominio(){
        return $this->hasMany(Condominio::class);
    }
}
