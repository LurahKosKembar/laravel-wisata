 <!-- Navbar & Hero Start -->
 <div class="container-fluid position-relative p-0">
     <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
         <a href="{{route('home')}}" class="navbar-brand p-0">
             <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Lentera</h1>
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
             <span class="fa fa-bars"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarCollapse">
             <div class="navbar-nav ms-auto py-0">
                 <a href="{{ route('home') }}" class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                 <a href="{{ route('about') }}" class="nav-item nav-link {{ request()->routeIs('about') ? 'active' : '' }}">Tentang</a>
                 <a href="{{ route('wisata') }}" class="nav-item nav-link {{ request()->routeIs('wisata*') ? 'active' : '' }}">Wisata</a>
                 <a href="{{route('event')}}" class="nav-item nav-link {{ request()->routeIs('event*') ? 'active' : '' }}">Event</a>
         </div>
     </nav>

     <div class="container-fluid bg-primary py-5 mb-5 hero-header">
         <div class="container py-5">
             <div class="row justify-content-center py-5">
                 <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                     <h1 class="display-3 text-white mb-3 animated slideInDown">Pesona Wisata di Ponorogo</h1>
                     <p class="fs-4 text-white mb-4 animated slideInDown">Reog Ponorogo dan Lebih Banyak Lagi: Jelajahi Kota Budaya Ini!</p>
                     <div class="position-relative w-75 mx-auto animated slideInDown">
                         <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Eg: Telaga Ngebel">
                         <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px;">Search</button>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Navbar & Hero End -->