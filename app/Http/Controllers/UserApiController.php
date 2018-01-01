<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserApiController extends Controller
{
    public function index()
    {
        return User::get();
    }
}
