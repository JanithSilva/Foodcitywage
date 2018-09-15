<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use App\user;

class DashboardController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('/dashboard');
    }

    public function dashboard(){

        $items = Item::all();

        return view('/dashboard')->with('items', $items);
    }
}
