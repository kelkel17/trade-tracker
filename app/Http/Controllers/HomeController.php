<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Trade;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $trades = Trade::whereUserId(Auth::user()->id)->get();

        return view('home', compact('trades'));
    }
}
