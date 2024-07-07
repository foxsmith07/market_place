<?php

namespace App\Http\Controllers;

use App\Models\Announce;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home(){

        $announces = Announce::all();

        return view('home', compact('announces'));
    }

    public function cart(){
        return view('announces.cart');
    }
}
