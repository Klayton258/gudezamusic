<?php

namespace App\API;

use Jenssegers\Agent\Facades\Agent;
use Stevebauman\Location\Facades\Location;
use Illuminate\Support\Facades\Log;

class Control
{
    public static function isPerson(){

        return Agent::isRobot();
    }

    public static function access(){
        $device = Agent::device();
        $platform = Agent::platform();
        $version = Agent::version($platform);
        $browser = Agent::browser();
        $clientIP = request()->ip();

        $location = Location::get($clientIP);

        // $level = 'info';
        // $message = "Session: ";
        // $data = ' Divice -> '.$device.' / Plataform -> '.$platform.' / Version -> '
        // .$version.'/ Browser -> '.$browser.'/ IP -> '.$clientIP.' / Location lat-> '.$location->latitude.' -lon-> '.$location->longitude
        // ."/ Region -> ".$location->regionName."/ City -> ".$location->cityName ;

        // Log::channel('main')->$level($message." [".$data."]");
    }

}
