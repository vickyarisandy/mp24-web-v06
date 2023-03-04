<section class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">

         <div class="navbar-header">
              <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                   <span class="icon icon-bar"></span>
                   <span class="icon icon-bar"></span>
                   <span class="icon icon-bar"></span>
              </button>

              <!-- lOGO TEXT HERE -->
               <a href="{{ route('home') }}" class="navbar-brand"></i> PT Medika Persada 24 </a>
         </div>

         <!-- MENU LINKS -->
         <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav navbar-right">

                   @if (Auth::check())
                   <li>
                         <a href="{{ route('beranda') }}" class="smoothScroll">Beranda

                         </a>
                    </li>
                   <li><a href="{{ route('profil') }}" class="smoothScroll">Profil</a></li>
                   <li><a href="{{ route('buat_keluhan') }}" class="smoothScroll">Buat Keluhan</a></li>
                   <li><a href="{{ route('restitusi') }}" class="smoothScroll">Restitusi</a></li>
                   <li><a href="{{ route('riwayat') }}" class="smoothScroll">Riwayat Keluhan</a></li>
                   <li class="appointment-btn" >
                    <a  href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                     Logout</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                    </form>
                   </li>

                   @elseif(Route::is('dokter') )
                   <li><a href="{{ route('home') }}" class="smoothScroll">Home</a></li>
                   <li class="appointment-btn"><a href="#appointment">Buat Janji</a></li>
                   <li class="appointment-btn"><a href="{{ route('login') }}">login</a></li>
                   @elseif(Route::is('obat') )
                   <li><a href="{{ route('home') }}" class="smoothScroll">Home</a></li>
                   <li class="appointment-btn"><a href="#appointment">Buat Janji</a></li>
                   <li class="appointment-btn"><a href="{{ route('login') }}">login</a></li>
                   @else
                   <li><a href="#top" class="smoothScroll">Home</a></li>
                   <li><a href="#about" class="smoothScroll">About Us</a></li>
                   <li><a href="#team" class="smoothScroll">Doctors</a></li>
                   <li><a href="#news" class="smoothScroll">News</a></li>
                   <li><a href="#google-map" class="smoothScroll">Contact</a></li>
                   <li class="appointment-btn"><a href="#appointment">Buat Janji</a></li>
                   <li class="appointment-btn"><a href="{{ route('login') }}">login</a></li>
                   @endif
              </ul>
         </div>

    </div>
</section>
