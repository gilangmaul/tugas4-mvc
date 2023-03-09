<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $name['student'] = 'Naruto';
        $name['teacher'] = 'Iruka';

        $name['school'] = user::all();


        return view('index', $name);
    }
}
