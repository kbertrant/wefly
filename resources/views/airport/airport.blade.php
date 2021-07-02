@extends('admin')
@section('title', ' - Aeroports')

@section('main-content')
<div class="container">
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif
    <div class="row justify-content-center">
        <h3>Ajouter un aéroport</h3>
        <div class="col-lg-12 col-md-12">
            <form action="{{url('airport/store') }}" method="POST" class="form" role="form">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 centered">
                        <br>
                        <label>Nom de l'aéroport*</label>
                        <input placeholder="Nom aeroport" id="aeroportName" type="text" class="form-control" name="aeroportName" required>
                        <br>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 centered">
                        <br>
                        <label>Ville *</label>
                        <input placeholder="Ville" id="ville" type="text" class="form-control" name="ville" required>
                        <br>
                    </div>
                </div>
                <p style="text-align: center;"><input class="btn btn-primary" value="Ajouter" type="submit"/></p>
                        
                    
          </form>
          <br>
          <h2>Liste des aeroports</h2>
    <br>
    <div class="table-responsive">
        <table class="table table-striped table-bordered" id="airport">
            <thead>
               <tr>
                  <th>Noms</th>
                  <th>Ville</th>
               </tr>
            </thead>
        </table>
    </div>
        </div>  
    </div>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="{{ asset('files/airport.js') }}"></script>
@endsection