<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(string $id, string $name)
    {
        return "Your ID is $id and your name is $name";
    }
}
