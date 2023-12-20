<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Work;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $user = User::find(1);
        $works = Work::all();

        return view('home', ['user' => $user, 'works' => $works]);
    }
}
