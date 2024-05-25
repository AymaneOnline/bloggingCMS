<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// I'm adding this comment to test git commands (status, add, commit)

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('index');
    }
}
