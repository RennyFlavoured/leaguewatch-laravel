<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use App\Http\Controllers\RiotAPI\ApiChampion;
use Input;

class GameController extends Controller
{
    public function showGame(ApiChampion $champ)
    {
        $json = $champ->allChampData();
        
        echo $json;

    }
}