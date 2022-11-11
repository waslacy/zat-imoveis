<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoImovel extends Model
{
    use HasFactory;

    protected $fillable = [
        'Imovel_id',
        'order',
        'path_img'
    ];

    public function imovel(){
        return $this->belongsTo(Imovel::class);
    }
}
