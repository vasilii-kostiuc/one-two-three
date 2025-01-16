<?php

namespace App\Http\Services;

use App\Models\Game;

class GameService
{
    public function create(array $data): Game{
        $game = new Game();

        return $game;
    }

}
