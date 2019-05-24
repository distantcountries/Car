<?php

namespace App\Http\Controllers\Cars;

use App\Car;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index(){
        $cars = Car::all(); 
        return view('cars.index', compact('cars')); 
    }

    public function show($id){
        $cars = Car::find($id); 
        return view('cars.show', compact('cars')); 
    }

}


