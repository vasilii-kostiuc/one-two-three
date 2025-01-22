<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\GameCreateRequest;
use App\Http\Resources\GameResource;
use App\Http\Services\GameService;
use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    private GameService $gameService;

    public function __construct(GameService $gameService)
    {
        $game = new Game();
        //$game->game

        $this->gameService = $gameService;
    }

    public function index()
    {
        return response()->json(['dffds'=>'GGGGGGGGGGGG']);
    }

    public function store(GameCreateRequest $request)
    {
        $game = $this->gameService->create($request->validated());
        //return response()->json(['rrrrrrrrrrrrrrrrrr'=>'GGGGGGGGGGGG']);

        return new GameResource($game);
    }
}
