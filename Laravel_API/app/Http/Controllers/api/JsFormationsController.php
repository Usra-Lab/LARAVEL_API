<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class JsFormationsController extends Controller
{
    public function index(){
        $formations=json_decode(file_get_contents("http://localhost/FirstApi/API/formations/javascript"));

        return view('js_formations',['formations'=> $formations,]);
    }
}