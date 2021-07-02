@extends('admin')
@section('title', ' - Compagnies')

@section('main-content')
<div class="container">
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif
    <div class="row justify-content-center">
        <h3>Ajouter une compagnie aérienne</h3>
        <div class="col-lg-12 col-md-12">
            <form action="{{url('compagnie/store') }}" method="POST" class="form" role="form">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 centered">
                        <br>
                        <label>Nom de a compagnie*</label>
                        <input placeholder="Nom compagnie" id="comName" type="text" class="form-control" name="comName" required>
                        <br>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 centered">
                        <br>
                        <label>logo ou sigle *</label>
                        <input placeholder="Logo ou sigle" id="comLogo" type="text" class="form-control" name="comLogo" required>
                        <br>
                    </div>
                </div>
                <p style="text-align: center;"><input class="btn btn-primary" value="Ajouter" type="submit"/></p>
                        
                    
          </form>
          <br>
          <h2>Liste des compagnies</h2>
    <br>
    <div class="table-responsive">
        <table class="table table-striped table-bordered" id="compagnie">
            <thead>
               <tr>
                  <th>Noms</th>
                  <th>LOGO ou SIGLE</th>
               </tr>
            </thead>
        </table>
    </div>
        </div>  
    </div>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="{{ asset('files/compagnie.js') }}"></script>
@endsection