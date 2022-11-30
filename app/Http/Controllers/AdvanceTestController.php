<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;

class AdvanceTestController extends Controller
{
    public function index(Request $request)
    {
        return view('index',['txt' => 'お問い合わせ']);
    }

    public function post(ClientRequest $request)
    {
        return view('index', ['txt' => 'お問い合わせ']);
    }
}
