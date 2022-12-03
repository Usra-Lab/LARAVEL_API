<?php

namespace App\Http\Controllers\api;

use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;

class FormationsController extends Controller
{
    public function index(){
        $formations=json_decode(file_get_contents("http://localhost/FirstApi/API/formations"));

        return view('formations',['formations'=> $formations,]);
    }


}