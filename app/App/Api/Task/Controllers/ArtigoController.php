<?php

namespace App\Api\Task\Controllers;

use App\Core\Http\Controllers\Controller;
use App\Api\Task\Requests\ArtigoRequest;
use Domain\Task\Actions\CreateArtigoAction;
use Domain\Task\DataTransferObject\ArtigoData;
use Domain\Task\Models\Artigo;

class ArtigoController extends Controller
{
    public function index()
    {
        return app(Artigo::class)->get();
    }

    public function store(ArtigoRequest $request, CreateArtigoAction $action)
    {
        $data = ArtigoData::fromRequest($request);

        $action($data);

        return $action($data);
    }
}
