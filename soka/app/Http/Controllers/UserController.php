<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id)
    {
        if ($id == "1") {
            $name = 'Yoshikazu';
        } else { 
            $name = 'TANAKA';
        }
        return view('index', ['name' => $name]);
    }
}
