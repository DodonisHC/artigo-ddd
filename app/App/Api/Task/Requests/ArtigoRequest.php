<?php

namespace App\Api\Task\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtigoRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'modulo_id'                 => 'required|integer',
            'cliente_id'                => 'required|integer',
            'usuario_id'                => 'required|integer',
            'tipo'                      => 'integer|nullable',
            'titulo'                    => 'required|string',
            'artigo'                    => 'required|string',
            'data_artigo'               => 'date|nullable',
            'data_inicial'              => 'date|nullable',
            'data_final'                => 'date|nullable',
            'fonte'                     => 'string|nullable',
            'chapeu'                    => 'string|nullable',
            'linha_final'               => 'string|nullable',
            'visivel_periodo_eleitoral' => 'integer|nullable',
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'tipo'                      => $this->tipo                      ?? 0,
            'scope'                     => $this->scope                     ?? 1,
            'visivel_periodo_eleitoral' => $this->visivel_periodo_eleitoral ?? 1,
        ]);
    }
}
