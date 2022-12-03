<?php

namespace App\Http\Controllers\api;

use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;

class FormationsController extends Controller
{
    public function __invoke():array{
        $formations=Http::get("http://localhost/FirstApi/API/formations")->json();
        return[ $formations];
    }
}