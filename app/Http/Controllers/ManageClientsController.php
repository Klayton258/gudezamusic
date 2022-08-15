<?php

namespace App\Http\Controllers;

use App\API\ApiResponse;
use App\Models\Client;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManageClientsController extends Controller
{


    function leads()
    {
        $leads = Lead::all()->sortByDesc("id");

        return response()->json(ApiResponse::responseMessage('success', 200, $leads), 200);
    }

    function clients()
    {
        $clients = Client::all()->sortByDesc("id");

        return response()->json(ApiResponse::responseMessage('success', 200, $clients), 200);
    }
}
