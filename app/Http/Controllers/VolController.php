<?php

namespace App\Http\Controllers;

use App\Models\Vol;
use App\Models\Compagnie;
use App\Models\Aeroport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Datatables;

class VolController extends Controller
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
        return datatables()->of(Vol::query())->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $airports = Aeroport::all();
        $compagnies = Compagnie::all();
        return view('vol.vol',compact('airports','compagnies'));
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
            
            
        ]);

        if ($validator->fails()) {
            return redirect('/vol')
                        ->withErrors($validator)
                        ->withInput();
        }
        
        $vol = new Vol();
        //dd($request);
        $vol->numeroVol = rand(70000, 100000);
        $vol->heureDepart = $request->heureDepart;
        $vol->heureArrivee = $request->heureArrivee;
        $vol->jourDepart = $request->jourDepart;
        $vol->jourArrivee = $request->jourDepart;
        $vol->idAirportDepart = $request->idAirportDepart;
        $vol->idAirportArrivee = $request->idAirportArrivee;
        $vol->idCompagnie = $request->idCompagnie;
        $vol->nbrePassagers = $request->nbrePassagers;
        $vol->save();
        
        
        
        return redirect()->back()->with('success', 'Nouveau vol ajouté avec succes !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vol  $vol
     * @return \Illuminate\Http\Response
     */
    public function show(Vol $vol)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vol  $vol
     * @return \Illuminate\Http\Response
     */
    public function edit(Vol $vol)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vol  $vol
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vol $vol)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vol  $vol
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vol $vol)
    {
        //
    }
}
