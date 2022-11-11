<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    use HasFactory;

    protected $fillable = [
        'referencia',
        'status',
        'title',
        'description',
        'Tipo_id',
        'destination',
        'valor_venda',
        'valor_anual',
        'valor_temporada',
        'area_util',
        'area_total',
        'quartos',
        'suites',
        'banheiros',
        'vagas_garagem',
        'caract_imovel',
        'Condominio_id',
        'iptu',
        'condominio',
        'zelador_caseiro',
        'Bairro_id',
        'endereco',
        'CEP',
        'Proprietario_id',
        'notas_privadas',
    ];

    public function tipoImovel(){
        return $this->belongsTo(TipoImovel::class);
    }

    public function condominio(){
        return $this->belongsTo(Condominio::class);
    }

    public function proprietario(){
        return $this->belongsTo(Proprietario::class);
    }

    public function bairro(){
        return $this->belongsTo(bairro::class);
    }

    public function fotoImovel(){
        return $this->hasMany(FotoImovel::class);
    }
}
