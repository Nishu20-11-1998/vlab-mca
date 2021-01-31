<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function prolog()
    {
        return view('pages.prolog');
    }
    public function mp_neuron()
    {
        return view('pages.mp_neuron');
    }
}
