<?php

namespace App\Http\Controllers;

use App\Assignment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function prolog()
    {
        $assignments =DB::table('assignments')->where('active','1')->where('topic_name','Prolog')->get();
        return view('pages.prolog')->with('assignments',$assignments);
    }
    public function mp_neuron_xor()
    {
        return view('pages.mp_neuron.xor');
    }
    public function mp_neuron_nand()
    {
        return view('pages.mp_neuron.nand');
    }
    public function mp_neuron()
    {
        $assignments =DB::table('assignments')->where('active','1')->where('topic_name','MP Neuron')->get();
        return view('pages.mp_neuron')->with('assignments',$assignments);
    }
}
