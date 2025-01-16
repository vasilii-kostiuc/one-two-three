<?php

namespace App;

enum GameType: int
{
    case DirectLinkGame = 1;
    case FriendGame = 2;
    case ComputerGame = 3;
}
