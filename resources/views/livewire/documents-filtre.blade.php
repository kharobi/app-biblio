<div>


    <div class="products_page product_page--grid">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="widget mb-lg-30" id="col-filter">
                            <div class="widget-header-title px-20 py-15 c-filter">
                                <h6 class="d-flex align-content-center fw-500">
                                <img src="{{ asset('assets/img/svg/sliders.svg') }}" alt="sliders" class="svg"> تصنيفات الكتب
                                </h6>
                            </div>
                            <div class="category_sidebar">



                                        <!-- Start: Aside -->
                                        <aside class="product-sidebar-widget mb-30" id="c-type">
                                        <div class="widget_title" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" role="button" aria-expanded="true">
                                            <h6>حسب الإختصاص</h6>
                                        </div>
                                        <div class="card border-0 shadow-none multi-collapse mt-10 collapse show" id="multiCollapseExample2">
                                            <div class="product-category limit-list-item">
                                            <ul>
                                                <div class="w-100" >

                                                    <p class="fs-14 color-gray" ><a  href="#c-search" wire:click="selectType('null')">جميع الإختصاصات</a></p>
                                                    
                                                </div>
                        
                                                @foreach ($types as $type)
                                                    <li>
                                                        <div class="w-100" >

                                                            <p class="fs-14 color-gray" ><a  href="#c-search" wire:click="selectType({{ $type->id }})">{{ $type->libelle_type }}</a></p>
                                                            
                                                        </div>
                                                    </li>
                                                @endforeach
                                            
                        
                                                
                                            </ul>

                                            


                                            </div>
                                        </div>
                                        </aside>
                                        <!-- End: Aside -->

                                         <!-- Start: Aside -->
                                         <aside class="product-sidebar-widget mb-30" id="c-type">
                                            <div class="widget_title" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample3" role="button" aria-expanded="true">
                                                <h6>حسب الإختصاص</h6>
                                            </div>
                                            <div class="card border-0 shadow-none multi-collapse mt-10 collapse show" id="multiCollapseExample3">
                                                <div class="product-category limit-list-item">
                                                <ul>
                                                    <div class="w-100" >
    
                                                        <p class="fs-14 color-gray" ><a  href="#c-search" wire:click="selectType('null')">جميع الإختصاصات</a></p>
                                                        
                                                    </div>
                            
                                                    @foreach ($types as $type)
                                                        <li>
                                                            <div class="w-100" >
    
                                                                <p class="fs-14 color-gray" ><a  href="#c-search" wire:click="selectType({{ $type->id }})">{{ $type->libelle_type }}</a></p>
                                                                
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                
                            
                                                    
                                                </ul>
    
                                                
    
    
                                                </div>
                                            </div>
                                        </aside>
                                            <!-- End: Aside -->

                                             <!-- Start: Aside -->
                                        <aside class="product-sidebar-widget mb-30" id="c-type">
                                            <div class="widget_title" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample4" role="button" aria-expanded="true">
                                                <h6>حسب الإختصاص</h6>
                                            </div>
                                            <div class="card border-0 shadow-none multi-collapse mt-10 collapse show" id="multiCollapseExample4">
                                                <div class="product-category limit-list-item">
                                                <ul>
                                                    <div class="w-100" >
    
                                                        <p class="fs-14 color-gray" ><a  href="#c-search" wire:click="selectType('null')">جميع الإختصاصات</a></p>
                                                        
                                                    </div>
                            
                                                    @foreach ($types as $type)
                                                        <li>
                                                            <div class="w-100" >
    
                                                                <p class="fs-14 color-gray" ><a  href="#c-search" wire:click="selectType({{ $type->id }})">{{ $type->libelle_type }}</a></p>
                                                                
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                
                            
                                                    
                                                </ul>
    
                                                
    
    
                                                </div>
                                            </div>
                                        </aside>
                                            <!-- End: Aside -->



                                       





                                        
                                       



                            </div>
                    </div><!-- End: .widget -->
                </div>
                <div class="col-md-9">
                    <!-- Start: Top Bar -->
                    <div class="shop_products_top_filter">
                        <div class="project-top-wrapper d-flex flex-wrap align-items-center">
                            <div class="project-top-left d-flex flex-wrap align-items-center">

                                {{-- search bouton --}}
                                    <div class="project-search shop-search  global-shadow " id="c-search">
                                        <form action="/" class="d-flex align-items-center user-member__form">
                                            <img src="{{ asset('assets/img/svg/search.svg') }}" alt="search" class="svg">
                                            <input class="" wire:model="query" wire:keyup.debounce="filter" type="search"  placeholder="عنوان الكتاب او المؤلف..." aria-label="Search">
                                        </form>
                                    </div>
                                {{-- search bouton --}}

                                {{-- <span class="project-result-showing fs-14 color-gray ms-xl-25 me-xl-0 text-center mt-lg-0 mt-20">
                                    إظهار<span></span> نتائج </span> --}}
                               </div>
                                           {{-- <div class="project-top-right d-flex flex-wrap align-items-center">
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
                                           </div> --}}
                               </div>
                               </div>
                        <!-- End: Top Bar -->
    
    


