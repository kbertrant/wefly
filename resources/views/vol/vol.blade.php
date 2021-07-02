@extends('admin')
@section('title', ' - les vols')

@section('main-content')
<div class="container">
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif
    <div class="row justify-content-center">
        <h3>Ajouter un vol</h3>
        <div class="col-lg-12 col-md-12">
            <form action="{{url('vol/store') }}" method="POST" class="form" role="form">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 centered">
                        <label>Date départ*</label>
                        <input  id="" type="date" class="form-control" name="jourDepart" required>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 centered">
                        
                        <label>Date Arrivée*</label>
                        <input  id="" type="date" class="form-control" name="jourArrivee" required>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 centered">
                        <label>Heure départ*</label>
                        <input  id="" type="text" class="form-control" name="heureDepart" required>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 centered">
                        <label>Heure Arrivée*</label>
                        <input  id="" type="text" class="form-control" name="heureArrivee" required>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 centered">
                        <label>Aeroport départ*</label>
                        <select name="idAirportDepart" id="idAirportDepart" class="form-control"  required>
                            <option value="">Choix aeroport depart</option>
                            @foreach ($airports as $airport)
                                <option value="{{ $airport->id }}">{{ $airport->aeroportName }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 centered">
                        <label>Aeroport Arrivée*</label>
                        <select name="idAirportArrivee" id="idAirportArrivee" class="form-control"  required>
                            <option value="">Choix aeroport arrivée</option>
                            @foreach ($airports as $airport)
                                <option value="{{ $airport->id }}">{{ $airport->aeroportName }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 centered">
                        <label>Compagnie aérienne*</label>
                        <select name="idAirportArrivee" id="idAirportArrivee" class="form-control"  required>
                            <option value="">Choix compagnie</option>
                            @foreach ($compagnies as $compagnie)
                                <option value="{{ $compagnie->id }}">{{ $compagnie->comName }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 centered">
                        <label>Nbre passages*</label>
                        <input  id="" type="text" class="form-control" name="nbrePassagers" required>
                    </div>
                </div>
            <br>
                <p style="text-align: center;"><input class="btn btn-primary" value="Ajouter" type="submit"/></p>
                        
                    
          </form>
          <br>
          <h2>Liste des vols disponibles</h2>
    <br>
    <div class="table-responsive">
        <table class="table table-striped table-bordered" id="vol">
            <thead>
               <tr>
                  <th>Numero vol</th>
                  <th>Jour départ</th>
                  <th>jour arrivée</th>
                  <th>heure départ</th>
                  <th>heure arrivée</th>
                  <th>Embarquement</th>
                  <th>Debarquement</th>
                  <th>Nombre passagers</th>
               </tr>
            </thead>
        </table>
    </div>
        </div>  
    </div>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="{{ asset('files/vol.js') }}"></script>
@endsection