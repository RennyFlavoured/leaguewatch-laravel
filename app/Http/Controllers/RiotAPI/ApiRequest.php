<?php

namespace App\Http\Controllers\RiotAPI;

abstract class ApiRequest 
{    
    public function getData( $url )
    {
        $ch = curl_init();

        curl_setopt_array($ch, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url,
            CURLOPT_USERAGENT => 'LeagueWatch Prototype'
            )
        );
       
        $resp = curl_exec($ch);
        
        curl_close($ch);
        
        return $resp;
    }            
}