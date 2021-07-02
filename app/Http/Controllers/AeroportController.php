<?php

namespace App\Http\Controllers;

use App\Models\Aeroport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Datatables;

class AeroportController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return datatables()->of(Aeroport::query())->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('airport.airport');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'aeroportName' => ['required'],
            'ville' => ['required'],
            
        ]);

        if ($validator->fails()) {
            return redirect('/airport')
                        ->withErrors($validator)
                        ->withInput();
        }
        
        $airport = new Aeroport();
        //dd($request);
        $airport->aeroportName = $request->aeroportName;
        $airport->ville = $request->ville;
        $airport->save();
        
        
        
        return redirect()->back()->with('success', 'Nouveau Aeroport ajouté avec succes !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aeroport  $aeroport
     * @return \Illuminate\Http\Response
     */
    public function show(Aeroport $aeroport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aeroport  $aeroport
     * @return \Illuminate\Http\Response
     */
    public function edit(Aeroport $aeroport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aeroport  $aeroport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aeroport $aeroport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aeroport  $aeroport
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aeroport $aeroport)
    {
        //
    }
}
