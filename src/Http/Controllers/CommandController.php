<?php

namespace Lwj\Command\Http\Controllers;

use App\Http\Controllers\Controller;

class CommandController extends Controller
{
    public function index()
    {
        $message = "<h1>123123123</h1>";
        return view('command::command', compact('message'));
    }
}
