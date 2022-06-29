<?php

namespace App\API;

use Illuminate\Support\Facades\Log;

class ApiLogs
{
    public static function apiLog($level, $message, $data = '')
    {

        Log::channel('main')->$level($message." [".$data."]");
    }
}
