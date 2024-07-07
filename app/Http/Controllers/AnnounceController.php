<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnnounceRequest;
use App\Models\Announce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnnounceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('announces.insert');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AnnounceRequest $request)
    {
        Auth::user()->announces()->create([
            'title' => $request->input('title'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
            'category' => $request->input('category'),
            'condition' => $request->input('condition'),
            'imgage' => $request->has('imgage') ? $request->file('imgage')->store('public/img') : 'img/noImage.jpg',
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->back()->with('msg','Annuncio inserito');

    }

    /**
     * Display the specified resource.
     */
    public function show(Announce $announce)
    {
        return view('announces.details',compact('announce'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Announce $announce)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Announce $announce)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Announce $announce)
    {
        //
    }
}
