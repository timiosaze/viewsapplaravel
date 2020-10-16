<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\View;

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
        $views = View::where('user_id', Auth::id())->orderBy('updated_at', 'desc')->paginate(7);

        return view('views.index', ['views' => $views]);
    }
}
