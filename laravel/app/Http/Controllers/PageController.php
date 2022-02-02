<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class PageController extends Controller
{
    public function show()
    {
        $user = User::where('id', Session::get('id'))->first()->toArray();

        return view('main', ['user' => $user]);
    }
}
