<?php

namespace Domain\Task\DataTransferObject;

use App\Api\Task\Requests\ArtigoRequest;
use Spatie\DataTransferObject\DataTransferObject;

class ArtigoData extends DataTransferObject
{
    /**@var int */
    public $modulo_id;

    /**@var int */
    public $cliente_id;

    /**@var int */
    public $usuario_id;

    /**@var int */
    public $tipo;

    /**@var string */
    public $titulo;

    /**@var string */
    public $artigo;

    /**@var string */
    public $data_artigo;

    /**@var string */
    public $data_inicial;

    /**@var string */
    public $data_final;

    /**@var string */
    public $fonte;

    /**@var string */
    public $chapeu;

    /**@var string */
    public $linha_fina;

    /**@var int */
    public $visivel_periodo_eleitoral;


    public static function fromRequest(ArtigoRequest $artigoRequest): ArtigoData
    {
        return new Self([
            'modulo_id'                 => $artigoRequest['modulo_id'],
            'cliente_id'                => $artigoRequest['cliente_id'],
            'usuario_id'                => $artigoRequest['usuario_id'],
            'tipo'                      => $artigoRequest['tipo'],
            'titulo'                    => $artigoRequest['titulo'],
            'artigo'                    => $artigoRequest['artigo'],
            'data_artigo'               => $artigoRequest['data_artigo'],
            'data_inicial'              => $artigoRequest['data_inicial'],
            'data_final'                => $artigoRequest['data_final'],
            'fonte'                     => $artigoRequest['fonte'],
            'chapeu'                    => $artigoRequest['chapeu'],
            'linha_fina'                => $artigoRequest['linha_fina'],
            'visivel_periodo_eleitoral' => $artigoRequest['visivel_periodo_eleitoral'],
        ]);
    }
}
