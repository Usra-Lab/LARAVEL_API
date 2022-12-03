<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class PhpFormationsController extends Controller
{
    public function __invoke():array{
        $php_formations=Http::get("http://localhost/FirstApi/API/formations/php")->json();
        return[ $php_formations];
    }
}