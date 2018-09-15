<?php

namespace App\Http\Controllers;

use App\Centres;
use App\Employee;
use App\Item;
use Illuminate\Http\Request;

class PagesController extends Controller
{



    public function index(){
        $title = 'Welcome to shopping';
        //return view('pages.index','title');
        return view('pages.index')->with('title',$title);
    }

    public function about(){
        return view('pages.about');
    }

    public function services(){
        $data = array(
            'title' => 'Services!',
            'services' => ['Web design', 'Graphic design', 'SEO']
        );
        return view('pages.services') -> with($data);
    }

    public function itemSale(){

        $data = array(
            'items' => Item::all(),
            'employees' => Employee::all(),

        );
        return view('pages.itemSale')->with($data);
    }

    public function sales(){

        $data = array(
            'items' => Item::all(),
            'employees' => Employee::all(),
            'centres' => Centres::all(),
        );
        return view('pages.sales')->with($data);
    }

}
