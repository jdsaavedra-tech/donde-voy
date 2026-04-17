<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Place;

Route::get('places', function () {
    //$places = Place::orderBy('created_at', 'desc')->get();   para ordenar descendente
    $places = Place::latest()->get(); // Para ordenar por el último creado primero 
    return view('places.index', compact('places'));
})->name('places.index');


Route::get('places/create', function() {
    return view('places.create');
})->name('places.create'); 

Route::post('places', function(Request $request){
    $request->all();
    $newPlace = new Place;
    $newPlace->name = $request->input('name');
    $newPlace->category = $request->input('category');
    $newPlace->address = $request->input('address');
    $newPlace->neighborhood = $request->input('neighborhood');
    $newPlace->description = $request->input('description');
    $newPlace->save();

    return redirect()->route('places.index')->with('info', 'Producto creado exitosamente');
})->name('places.store');