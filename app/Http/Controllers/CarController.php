<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function addCar()
    {
        return view('add-car');
    }

    public function createCar(Request $request)
    {
        $car = new Car();
        $car->title = $request->title;
        $car->merk = $request->merk;
        $car->body = $request->body;
        $car->kmst = $request->kmst;
        $car->bwjr = $request->bwjr;
        $car->save();
        return back()->with('car_created','Car has been created successfully!');
    }

    public function getCar()
    {
        $cars = Car::orderBy('id','DESC')->get();
        return view('cars',compact('cars'));
    }

    public function getCarById($id)
    {
        $car = Car::where('id',$id)->first();
        return view('single-car',compact('car'));
    }

    public function deleteCar($id)
    {
        Car::where('id',$id)->delete();
        return back()->with('car_deleted','Auto Is Succesvol Verwijderd!');
    }

    public function editCar($id)
    {
        $car = Car::find($id);
        return view('edit-car',compact('car'));
    }

    public function updateCar(Request $request)
    {
        $car = Car::find($request->id);
        $car->title = $request->title;
        $car->merk = $request->merk;
        $car->body = $request->body;
        $car->kmst = $request->kmst;
        $car->bwjr = $request->bwjr;
        $car->save();
        return back()->with('car_updated','Auto Is Succesvol Geüpdate!');
    }
}