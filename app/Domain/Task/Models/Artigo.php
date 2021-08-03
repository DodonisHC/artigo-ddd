<?php

namespace Domain\Task\Models;

use Domain\Task\Enums\ArtigoPeriodoEleitoral;
use Domain\Task\Enums\ArtigoTipo;
use Illuminate\Database\Eloquent\Model;

class Artigo extends Model
{
    protected $table = 'artigo';

    protected $fillable = [
        'modulo_id',
        'cliente_id',
        'usuario_id',
        'scope',
        'tipo',
        'titulo',
        'artigo',
        'data_artigo',
        'data_inicial',
        'data_final',
        'fonte',
        'chapeu',
        'linha_fina',
        'visivel_periodo_eleitoral'
    ];

    public function getTipoAttribute($value)
    {
        return ArtigoTipo::tipo($value);
    }

    public function getVisivelPeriodoEleitoralAttribute($value)
    {
        return ArtigoPeriodoEleitoral::visibilidade($value);
    }
}
