<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //select * from cars table
        $cars = Car::all();
        

        //  $cars = DB::table('cars') 
        //  ->all();

        //  dd($cars);
        return view('cars.index',[
            'cars'=> $cars

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $car = new Car;
        // $car->name = $request->input('name');
        // $car->founded = $request->input('founded');
        // $car->save();

        // $car = Car::make([
        //     'name'=>$request->input('name'),
        //     'founded'=>$request->input('founded')
        // ]);
        // $car->save();


        $car = Car::create([
                'name'=>$request->input('name'),
                'founded'=>$request->input('founded')
            ]);
        
        return redirect('/cars');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::find($id);
        // dd($car);
        return view('cars.show')->with('car',$car);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car:: find($id)->first();
        // dd($car);
        return view('cars.edit')->with('car',$car);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $car = Car::where('id',$id)
        ->update([
            'name'=>$request->input('name'),
            'founded'=>$request->input('founded')
        ]);
        return redirect('/cars');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    { 
        // $car = Car:: find($id)->first();
        // dd($car);
        $car->delete();
      
        return redirect('/cars');

        
    }
}
