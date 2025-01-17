<?php

namespace App\Http\Services;

use App\GameType;
use App\Models\Game;

class GameService
{
    const  GAME_KEY_LENHTH = 10;

    public function create(array $data): Game
    {
        $gameType = GameType::from($data['game_type']);
        $game = new Game();
        $game->game_type = $gameType;
        $game->game_key = $this->generateGameKey(self::GAME_KEY_LENHTH);
        $game->save();

        return $game;
    }

    private function generateGameKey(int $length)
    {
        $gameKey = bin2hex(random_bytes($length));
        return $gameKey;
    }
}
