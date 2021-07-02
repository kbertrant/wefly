@extends('admin')

@section('title', ' - Accueil')

@section('main-content')
<div class="container">
  
    <div class="row justify-content-center">
      <div class="d-sm-flex align-items-center justify-content-between mb-10">
          <h1>Tableau de bord</h1>
      </div>
      <div class="col-lg-10 col-md-10">
      <!-- Content Row -->
        <div class="row">
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-6 col-md-6 mb-4">
                  <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Aeroports</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">324</div>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-car fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
    
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-6 col-md-6 mb-4">
                  <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Vols</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">24020</div>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-building fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
    
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-6 col-md-6 mb-4">
                  <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                            Clients
                          </div>
                          <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                              <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">300 023</div>
                            </div>
                            <div class="col">
                            </div>
                          </div>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
    
                <!-- Pending Requests Card Example -->
                <div class="col-xl-6 col-md-6 mb-4">
                  <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Paiements
                            </div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">134 000</div>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-credit-card fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

