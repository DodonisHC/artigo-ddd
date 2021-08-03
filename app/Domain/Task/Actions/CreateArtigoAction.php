<?php

namespace Domain\Task\Actions;

use Domain\Task\DataTransferObject\ArtigoData;
use Domain\Task\Models\Artigo;

final class CreateArtigoAction
{
    public function __invoke(ArtigoData $artigoData): Artigo
    {
        return Artigo::create([
            'modulo_id'                 => $artigoData->modulo_id,
            'cliente_id'                => $artigoData->cliente_id,
            'usuario_id'                => $artigoData->usuario_id,
            'tipo'                      => $artigoData->tipo,
            'titulo'                    => $artigoData->titulo,
            'artigo'                    => $artigoData->artigo,
            'data_artigo'               => $artigoData->data_artigo,
            'data_inicial'              => $artigoData->data_inicial,
            'data_final'                => $artigoData->data_final,
            'fonte'                     => $artigoData->fonte,
            'chapeu'                    => $artigoData->chapeu,
            'linha_fina'                => $artigoData->linha_fina,
            'visivel_periodo_eleitoral' => $artigoData->visivel_periodo_eleitoral,
        ]);
    }
}
