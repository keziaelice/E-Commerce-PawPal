<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ErrorController extends Controller
{
    public function view()
    {
        return view ("404");
    }
}
