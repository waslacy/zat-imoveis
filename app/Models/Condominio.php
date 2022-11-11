<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condominio extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'Bairro_id',
        'endereco',
        'CEP',
        'valor_condominio',
        'caract_cond',
        'zelador'
    ];

    public function imovel(){
        return $this->hasMany(Imovel::class);
    }

    public function bairro(){
        return $this->belongsTo(BairroImovel::class);
    }
}
