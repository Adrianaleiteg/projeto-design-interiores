<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projeto extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'funcionario_id',
        'status',
        'etapa_atual',
        'etapa_anterior',
        'etapa_posterior',
        'tempo_final_etapa',
    ];

    protected $table = 'projetos';
}
