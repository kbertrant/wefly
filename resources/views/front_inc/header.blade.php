
<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-none d-lg-block">
  <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i><a href="mailto:infos@vehistoric.com">infos@wefly.com</a>
        <i class="icofont-phone"></i> +237 697 662 979
      </div>
      <div class="social-links">
          <a href="#" class="twitter">
            @if(Route::has('login'))
            @auth
            <li><a href="{{ url('/home') }}">Tableau de bord</a></li>
            @else
          </a>
              <a href="{{ route('login') }}" class=""><i class="icofont-user"></i>Connexion</a>
              <a class="btn btn-sm p-1 bg-green" href="{{ route('register') }}" role="button"><i class="icofont-user mr-1"></i>Inscription</a>
            @endauth
          @endif
            
          
            </div>
      </div>
  </div>
</section>

<!-- ======= Header ======= -->
<header>
  <div class="container d-flex">
  
    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li class="active"><a href="{{ url('/') }}">Accueil</a></li>
        
  
      </ul>
    </nav><!-- .nav-menu -->
  
  </div>
</header><!-- End Header -->
