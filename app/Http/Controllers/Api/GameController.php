<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\GameCreateRequest;
use App\Http\Services\GameService;
use Illuminate\Http\Request;

class GameController extends Controller
{
    private GameService $gameService;

    public function __construct(GameService $gameService)
    {
        $this->gameService = $gameService;
    }

    public function store(GameCreateRequest $request)
    {
        $game = $this->gameService->create($request->validated());

        return response()->json($game, 201);

    }


}
