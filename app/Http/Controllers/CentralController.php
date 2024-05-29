<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\Artikel;
use App\Models\Gallery;
use App\Models\Visitor;
use Illuminate\Http\Request;

class CentralController extends Controller
{

    public function index(){
        $artikels = Artikel::all();
        $total = Visitor::count();
        $tours = Tour::with('categories')->get();
        $gallerys = Gallery::all();


        return view('central.index', compact('artikels' ,'total','tours','gallerys'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $artikels = Artikel::search($query)->get();
        $tours = Tour::search($query)->get();


        return view('central.pencarian', compact( 'artikels','tours'));
    }

    public function about(){
        return view('central.about-us');
    }

    public function policies(){
        return view('central.tour-policies');
    }

    public function partner(){
        return view('central.partner');
    }


    public function deals(){
        return view('central.deals');
    }

    public function tips(){
        return view('central.tips');
    }
    public function review(){
        return view('central.review');
    }
}
