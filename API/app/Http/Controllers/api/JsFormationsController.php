<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class JsFormationsController extends Controller
{
    public function __invoke():array{
        $js_formations=Http::get("http://localhost/FirstApi/API/formations/javascript")->json();
        return[ $js_formations];
    }
}