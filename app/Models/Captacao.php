<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Captacao extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'tipo_imovel',
        'destination',
        'valor',
        'n_quartos',
        'n_banheiros',
        'n_suites',
        'vagas_garagem',
        'area_util',
        'mais_detalhes',
        'imgs'
    ];
}
