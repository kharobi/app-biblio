
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
  <div class="container px-4 px-lg-5">
    <a class="navbar-brand" href="#page-top">Start Bootstrap</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
      aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ms-auto my-2 my-lg-0">
        <li class="nav-item"><a class="nav-link" href="#about">آخر اللإصدارات</a></li>
        <li class="nav-item"><a class="nav-link" href="#services">تصنيفات الكتب</a></li>
        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
        <li class="nav-item">
          <div class="dropdown-custom">
            <a href="" class="nav-link">
              @if(Auth::check())
              <span class="nav-item__title">{{ Auth::user()->name }}<i
                  class="las la-angle-down nav-item__arrow"></i></span>
              @endif
            </a>
            <div class="dropdown-wrapper">
              <div class="nav-author__info">
                
                <div>
                  @if(Auth::check())
                  <h6 class="text-center">{{ Auth::user()->name }}</h6>
                  @endif
                  {{-- <span>UI Designer</span> --}}
                </div>
              </div>
              <div class="nav-author__options">
                <a href="" class="nav-author__signout"
                  onclick="event.preventDefault();document.getElementById('logout').submit();">
                  {{-- <img src="{{ asset('assets/img/svg/log-out.svg') }}" alt="log-out" class="svg"> --}}
                  Sign Out</a>
                <form style="display:none;" id="logout" action="{{ route('logout') }}" method="POST">
                  @csrf
                  @method('post')
                </form>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Masthead-->
<header class="masthead">
  <div class="container px-4 px-lg-5 h-100">
    <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
      <div class="col-lg-8 align-self-end">
        <h1 class="text-white font-weight-bold">Your Favorite Place for Free Bootstrap Themes</h1>
        <hr class="divider" />
      </div>
      <div class="col-lg-8 align-self-baseline">
        <p class="text-white-75 mb-5">Start Bootstrap can help you build better websites using the Bootstrap
          framework! Just download a theme and start customizing, no strings attached!</p>
        <a class="btn btn-primary btn-xl" href="#about">Find Out More</a>
      </div>
    </div>
  </div>
</header>

@push('scripts1')
<script src="{{ asset('assets/js/script.js') }}"></script>
@endpush