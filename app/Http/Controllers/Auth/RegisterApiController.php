<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterApiController extends Controller
{
    // public function index()
    // {
    //     // is this even needed??
    //     return 'Hello nurse!';
    // }

    public function store(Request $request)
    {
        return User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'height' => $request['height'],
            'weight' => $request['weight'],
            'age' => $request['age'],
        ]);
    }
}
