@extends('main')

@section('title', ' Bienvenue')
@section('main-content')
<main id="main">

<section id="hero">
  <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

    <div class="carousel-inner" role="listbox">

      <!-- Slide 1 -->
      <div class="carousel-item active" style="background-image: url(img/Achat_billets.jpg);">
        <div class="carousel-container">
          
          <div class="carousel-content animate__animated animate__fadeInUp">
            <h4>Recherchez votre vol</span></h4>
            <div class="row">
              <div class="col-lg-12 text-center text-center">
                <form method="POST" action="{{url('recherche') }}">
                  {{csrf_field()}}
                  <div class="form-group">
                    <input type="text" class="form-control h-60 mb-2" placeholder="Entrez votre compagnie préférée" name=""  required minlength="17" maxlength="17">
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block cfx-get-report-btn w-100 h-60" title=""><i class="fa fa-search"></i>Rechercher</button>
                  </div>
                </form>
                  <br>
                    @if(session()->has('success'))
                      <div class="alert alert-danger">
                        {{ session()->get('success') }}
                      </div>
                    @endif
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

  </div>
</section><!-- End Hero -->

</main>
@endsection
