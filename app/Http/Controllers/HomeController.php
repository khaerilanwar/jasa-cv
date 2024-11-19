<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CV;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'modelAts' => CV::inRandomOrder()->where('category', 'ats')->limit(8)->get(),
            'modelCreative' => CV::inRandomOrder()->where('category', 'creative')->limit(8)->get()
        ];
        return view('pages.home', $data);
    }
}
