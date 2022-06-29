<?php

namespace App\API;

use Jenssegers\Agent\Facades\Agent;
use Stevebauman\Location\Facades\Location;

// use PDF;

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

        ApiLogs::apiLog('info','Session: Divice - ',$device.'/Plataform - '.$platform.'/Version - '.$version.'/Browser - '.$browser.'/IP - '.$clientIP.' /Location - '.$location);
    }

}
