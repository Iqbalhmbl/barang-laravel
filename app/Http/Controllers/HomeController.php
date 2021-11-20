<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ActivityLog;
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
        return view('home');
    }

    public function cv()
    {
        return view('cv');
    }

    public function aktivitas(){
        $activity = ActivityLog::with('user')->limit(10)->orderBy('id','DESC')->get();

        return view('activitylog', compact('activity'));
    }
}
