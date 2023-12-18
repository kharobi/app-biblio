<div>


    <div class="products_page product_page--grid">
        <div class="container-fluid">
            <div class="row justify-content-center">
            <div class="columns-1 col-lg-8 col-sm-10  mb-lg-0 mb-30">
                <div class="widget mb-lg-30">
                <div class="widget-header-title px-20 py-15">
                    <h6 class="d-flex align-content-center fw-500">
                    <img src="{{ asset('assets/img/svg/sliders.svg') }}" alt="sliders" class="svg"> Filters
                    </h6>
                </div>
                <div class="category_sidebar">
                    <!-- Start: Aside -->
                    <aside class="product-sidebar-widget mb-30">
                    <!-- Title -->
                    <div class="widget_title nocollapse">
                        <h6>Price Range</h6>
                    </div>
                    <!-- Title -->
                    <!-- Body -->
                    <div class="card border-0 shadow-none mt-10">
                        <div class="product-price-ranges">
                        <div id="price-range" class="mb-0">
                            <div class="section price">
                            <div class="price-slider"></div>
                            <p class="price-value"></p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- Body -->
                    </aside>
                    <!-- End: Aside -->
                    <!-- Start: Aside -->
                   
                    
                    
                     
                    
                      
                    <aside class="product-sidebar-widget mb-30">
                    <!-- Title -->

                    <div class="widget_title" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" role="button" aria-expanded="true">
                        <h6>Types</h6>
                    </div>
                    <!-- Title -->
                    <!-- Body -->
                    <div class="card border-0 shadow-none multi-collapse mt-10 collapse show" id="multiCollapseExample2">
                        <div class="product-category limit-list-item">
                        <ul>
                            <div class="w-100" >

                                <p class="fs-14 color-gray" ><a  href="#" wire:click="selectType('null')">tous les types</a></p>
                                
                            </div>
    
                            @foreach ($types as $type)
                                <li>
                                    <div class="w-100" >

                                        <p class="fs-14 color-gray" ><a  href="#" wire:click="selectType({{ $type->id }})">{{ $type->libelle_type }}</a></p>
                                        
                                    </div>
                                 </li>
                            @endforeach
                           
    
                            
                        </ul>

                        


                        </div>
                    </div>
                    <!-- Body -->
                    </aside>
                    <!-- End: Aside -->
                    <!-- Start: Aside -->
                    <aside class="product-sidebar-widget mb-30">

                        
                    <!-- Title -->
                    <div class="widget_title" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample3" role="button" aria-expanded="true">
                        <h6>Brands</h6>
                    </div>
                    <!-- Title -->
                    <!-- Body -->

                    
                    @foreach ($types as $type)
                    <div class="card border-0 shadow-none multi-collapse mt-10 collapse show" id="multiCollapseExample3">
                        <div class="product-brands limit-list-item">
                        <ul>
    
    
    
    
    
                            
                            <li>
                            <div class="checkbox-theme-default custom-checkbox ">
                                <input class="checkbox" type="checkbox" id="check-1">
                                <label for="check-1">
                                <span class="checkbox-text">
                                    {{ $type->libelle_type }}
    
                                    <span class="item-numbers"></span>
    
                                </span>
                                </label>
                            </div>
                            </li>
                            
    
    
    
    
    
                        </ul>
                        </div>
                    </div>
                    @endforeach



                    <!-- Body -->
                    </aside>
                    <!-- End: Aside -->
                    <!-- Start: Aside -->
                    <aside class="product-sidebar-widget">
                    <!-- Title -->
                    <div class="widget_title" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample4" role="button" aria-expanded="true">
                        <h6>Ratings</h6>
                    </div>
                    <!-- Title -->
                    <!-- Body -->
                    <div class="card border-0 shadow-none multi-collapse mt-10 collapse show" id="multiCollapseExample4">
                        <div class="product-ratings">
                        <ul>
    
    
    
    
    
                            @for ($i = 0; $i < 5; $i++)
                                <li>
                                <div class="checkbox-theme-default custom-checkbox ">
                                    <input class="checkbox" type="checkbox" id="rating-1">
                                    <label for="rating-1">
    
                                    <span class="stars-rating d-flex align-items-center">
                                        <span class="star-icon las la-star active"></span>
                                        <span class="star-icon las la-star active"></span>
                                        <span class="star-icon las la-star active"></span>
                                        <span class="star-icon las la-star active"></span>
                                        <span class="star-icon las la-star active"></span>
                                        <span class="checkbox-text">
                                        and up
                                        <span class="item-numbers">{{ $i }}</span>
                                        </span>
                                    </span>
    
                                    </label>
                                </div>
                                </li>
                                @endfor
    
    
    
    
                                
                            
                        </ul>
                        </div>
                    </div>
                    <!-- Body -->
                    </aside>
                    <!-- End: Aside -->
                </div>
                </div><!-- End: .widget -->
            </div><!-- End: .columns-1 -->
            <div class="columns-2 col-lg-12">
    <!-- Start: Top Bar -->
    <div class="shop_products_top_filter">
        <div class="project-top-wrapper d-flex flex-wrap align-items-center">
            <div class="project-top-left d-flex flex-wrap align-items-center">

                {{-- search bouton --}}
            <div class="project-search shop-search  global-shadow ">
                <form action="/" class="d-flex align-items-center user-member__form">
                <img src="{{ asset('assets/img/svg/search.svg') }}" alt="search" class="svg">
                <input class="form-control me-sm-2 border-0 box-shadow-none" wire:model="query" wire:keyup.debounce="filter" type="search"  placeholder="Search" aria-label="Search">
                </form>
            </div>
              {{-- search bouton --}}

            <span class="project-result-showing fs-14 color-gray ms-xl-25 me-xl-0 text-center mt-lg-0 mt-20">Showing
                <span>1–8</span> of <span>86</span>
                results</span>
            </div>
            <div class="project-top-right d-flex flex-wrap align-items-center">
            <div class="project-category flex-wrap d-flex align-items-center">
                <p class="fs-14 color-gray text-capitalize">sort by:</p>
                <div class="project-tap project-tab__product">
                <ul class="nav px-1 " id="ap-tab" role="tablist">
                    <li class="nav-item">
                    <a class="nav-link active" id="ap-overview-tab" data-bs-toggle="pill" href="#ap-overview" role="tab" aria-controls="ap-overview" aria-selected="true">top rated</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" id="timeline-tab" data-bs-toggle="pill" href="#timeline" role="tab" aria-controls="timeline" aria-selected="false">popular</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" id="activity-tab" data-bs-toggle="pill" href="#activity" role="tab" aria-controls="activity" aria-selected="false">Newest</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" id="draft-tab" data-bs-toggle="" href="{{ route('ecommerce.add_product',app()->getLocale()) }}" role="tab" aria-controls="draft" aria-selected="false">add product</a>
                    
                    </li>
                </ul>
                </div>
            </div>
            <div class="project-icon-selected content-center mt-lg-0 mt-25">
                <div class="listing-social-link listing-social-link__products pb-lg-0 pb-xs-2">
                <div class="icon-list-social d-flex">
                    <a class="icon-list-social__link rounded-circle icon-list-social__style justify-content-center active ms-xl-20" href="#">
                    <img class="svg" src="{{ asset('assets/img/svg/grid.svg') }}" alt="grid"></a>
                    <a class="icon-list-social__link rounded-circle icon-list-social__style justify-content-center  " href="{{ route('ecommerce.product_list',app()->getLocale()) }}">
                    <img class="svg" src="{{ asset('assets/img/svg/list.svg') }}" alt="list"></a>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <!-- End: Top Bar -->
    
    


