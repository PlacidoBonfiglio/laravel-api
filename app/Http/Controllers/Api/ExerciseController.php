<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Exercise;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function index() {
        $exercises = Exercise::all();
        return response()->json([
                "success" => true,
                "results" => $exercises
            ]);
    }
}
