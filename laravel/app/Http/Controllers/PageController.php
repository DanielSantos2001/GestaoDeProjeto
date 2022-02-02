<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PageController extends Controller
{
    public function show($id)
    {

        $user = User::where('id', $id)->first()->toArray();

        return view('main', ['user' => $user]);
    }
}
