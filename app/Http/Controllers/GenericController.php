<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenericController extends Controller
{
    public function landing (request $request) {

        return view( 'landing');
    }
}
