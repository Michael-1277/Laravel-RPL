<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $metrics = [
            'projects' => 36,
            'support' => '24/7',
            'experience' => 3,
            'satisfaction' => 89.4,
            'satisfied_count' => 42,
            'total_feedback' => 47
        ];

        return view('about', compact('metrics'));
    }
}