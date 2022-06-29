<?php

namespace App\API;

use DateTime;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Jenssegers\Agent\Facades\Agent;

// use PDF;

class ApiResponse
{
    public static function responseMessage($message, $code, $data = '')
    {
        return
            [
                'msg' => $message,
                'code' => $code,
                'data' => $data
            ];
    }

}
