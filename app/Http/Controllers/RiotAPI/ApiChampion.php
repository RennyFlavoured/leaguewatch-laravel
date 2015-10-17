<?php

namespace App\Http\Controllers\RiotAPI;

class ApiChampion extends ApiRequest
{
    private $apiKey;
    
    function __construct()
    {
        $this->apiKey = env('API_KEY');
    }
    
    public function allChampData()
    {
        $url = 'https://euw.api.pvp.net/api/lol/euw/v1.2/champion?api_key=' . $this->apiKey;
        $result = $this->getData($url);
        return $result;
    }
    
    public function champIdData( $id )
    {
        $url = 'https://euw.api.pvp.net/api/lol/euw/v1.2/champion/' . $id . '?api_key=' . $this->apiKey;
        $result = $this->getData($url);
        return $result;
    }
}