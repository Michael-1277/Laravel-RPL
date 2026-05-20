<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $services = [
            [
                'name' => 'Backend Development',
                'description' => 'Building robust server-side applications and APIs using modern frameworks. Database design, optimization, and system architecture planning.'
            ],
            [
                'name' => 'Full Stack Development',
                'description' => 'Creating modern web applications using React, Node.js, Python Django, and comprehensive database management solutions.'
            ],
            [
                'name' => 'DevOps & Automation',
                'description' => 'Implementing CI/CD pipelines, containerization with Docker, cloud deployment, and automated testing workflows.'
            ]
        ];

        return view('services', compact('services'));
    }
}