
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
  <div class="container px-4 px-lg-5">
    <a class="navbar-brand" href="{{ route('ecommerce.products',app()->getLocale()) }}#page-top">مكتبة المدرسة العليا الحربية</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
      aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ms-auto my-2 my-lg-0">
        <li class="nav-item"><a class="nav-link" href="#about">آخر اللإصدارات</a></li>
        <li class="nav-item"><a class="nav-link" href="#services">تصنيفات الكتب</a></li>
        @role('Admin')
        <li class="nav-item"><a class="nav-link" href="{{ route('ecommerce.users.index',app()->getLocale()) }}">إدارة المستخدمين</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('ecommerce.roles.index',app()->getLocale()) }}">إدارة الأدوار</a></li>
        @endrole
        @role('docManage|Admin')
        <li class="nav-item"><a class="nav-link" href="{{ route('ecommerce.add_product',app()->getLocale()) }}">إضافة الكتب</a></li>
        @endrole
        
        <li class="nav-item">
          <div id="selectNavLink">
          
          <a class="nav-link" href="#">
              @if(Auth::check())
              <span class="nav-item__title">{{ Auth::user()->name }}
                <i class="las la-angle-down nav-item__arrow"></i></span>
              @endif</a>
              <ul id="listNavLink">
                <li>
                        @if(Auth::check())
                          <h6 class="text-center">{{ Auth::user()->name }}</h6>
                      @endif
                </li>
                <li>
                        <a href="" class=""
                          onclick="event.preventDefault();document.getElementById('logout').submit();">
                          <img src="{{ asset('assets/img/svg/log-out.svg') }}" alt="log-out" class="svg">
                          Sign Out</a>
                        <form style="display:none;" id="logout" action="{{ route('logout') }}" method="POST">
                          @csrf
                          @method('post')
                        </form>
                </li>
              </ul>
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
      <div class="">
        <h1 class="headerTitre">مكتبة المدرسة العليا الحربية</h1>
      </div>
      <div class="col-lg-8 align-self-baseline">


        @livewire('search-category')


      
    </div>
  </div>
</header>

@push('scripts1')
<script src="{{ asset('assets/js/script.js') }}"></script>
@endpush