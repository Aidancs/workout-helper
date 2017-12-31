<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exercise;

class ExercisesApiController extends Controller
{
    public function index()
    {
        return Exercise::all();
    }
}
