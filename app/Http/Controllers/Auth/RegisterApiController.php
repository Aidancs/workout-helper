<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterApiController extends Controller
{
    public function index()
    {
        return 'Hello nurse!';
    }

    public function store($data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'height' => $data['height'],
            'weight' => $data['weight'],
            'age' => $data['age'],
        ]);
    }
}
