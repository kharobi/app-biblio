@section('title')
@section('description')
@extends('layout.app')
@section('content')
 <script src="https://cdn.tailwindcss.com"></script>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="shop-breadcrumb">
                <div class="breadcrumb-main">
                    
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>{{ trans('menu.dashboard-menu-title') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.ecommerce-product-details') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="products mb-30">
    <div class="container-fluid">
        <div class="card product-details h-100 border-0">
            <div class="product-item d-flex p-sm-50 p-20">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="product-item__image">
                            <div class="wrap-gallery-article carousel slide carousel-fade" id="carouselExampleCaptions" data-bs-ride="carousel">
                                <div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="img-fluid d-flex bg-opacity-primary " src="{{ Storage::url($document->cover_image) }}" alt="Card image cap" title="">
                                        </div>
                                        {{-- <div class="carousel-item">
                                            <img class="img-fluid d-flex bg-opacity-primary" src="{{ asset('assets/img/furniture2') }}.jpg" alt="Card image cap" title="">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="img-fluid d-flex bg-opacity-primary" src="{{ asset('assets/img/furniture3') }}.jpg" alt="Card image cap" title="">
                                        </div> --}}
                                    </div>
                                </div>
                                {{-- <div class="overflow-hidden">
                                    <ul class="reset-ul d-flex flex-wrap list-thumb-gallery">
                                        <li>
                                            <a href="#" class="thumbnail active" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1">
                                                <img class="img-fluid d-flex" src="{{ asset('assets/img/furniture.jpg') }}" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="thumbnail " data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2">
                                                <img class="img-fluid d-flex" src="{{ asset('assets/img/furniture2.jpg') }}" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="thumbnail " data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3">
                                                <img class="img-fluid d-flex" src="{{ asset('assets/img/furniture3.jpg') }}" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-7">
                        <div class=" b-normal-b mb-25 pb-sm-35 pb-15 mt-lg-0 mt-15">
                            <div class="product-item__body col justify-content-end">
                                <div class="product-item__title">
                                    
                                        <h1 class="card-title">
                                            {{ $document->titre }}
                                        </h1>
                                    
                                </div>
                                <div class="product-item__content text-capitalize">
                                    <div class="product-item__title">
                                    
                                        <h2 class="card-title"><span  class="stars-rating__review">
                                            {{ $document->person }}
                                        </span>
                                            
                                        </h2>
                                    
                                </div>
            
                                
                                    
                                    <p class=" product-deatils-pera">{{ $document->description }}</p>
                                    
                                    
                                    <div class="product-item__button mt-lg-30 mt-sm-25 mt-20 d-flex flex-wrap">
                                        <div class=" d-flex flex-wrap product-item__action align-items-center  ms-auto">
                                            <div class="like-icon">
                                                <button type="button">
                                                    <i class="lar la-heart icon"></i>
                                                </button>
                                            </div>
                                            {{-- <button class="btn btn-primary btn-default btn-squared border-0 me-10 my-sm-0 my-2">
                                                commenter
                                            </button> --}}


                                                <a  href="{{ Storage::url($document->document_file) }}"  target="_blank">
                                                    <button class="btn btn-danger btn-default btn-squared border-0 px-25 my-sm-0 my-2 me-10">
                                                        Voir pdf
                                                    </button>
                                                </a>
                                            
                                           
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
               <div style="margin-top: -100px">
                     <livewire:comments :model="$document"/>      
                </div> 
        </div></div>

        


    </div>
</div>
@endsection