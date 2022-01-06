<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    	// $companies = DB::table('companies')->get();
        $companies = DB::table('companies')->paginate(5);
 
    	// mengirim data company ke view index
    	return view('home',['companies' => $companies]);
        // return view('home');
    }
}
