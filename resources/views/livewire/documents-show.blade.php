
    <div class="tab-content mt-25" id="ap-tabContent">
        <div class="tab-pane fade show active" id="ap-overview" role="tabpanel" aria-labelledby="ap-overview-tab">
            

            <section class="packages" id="packages">
                <div class="container">
              
                  <div class="row" style="margin-top: 30px;">
                    @foreach ($documents as $document)
                        <div class="col-md-3 py-3 py-md-0 mb-4">
                        <div class="card">
                            <a id="voir-plus" href="{{ route('ecommerce.product_detail',['language' => app()->getLocale(),'id'=>$document->id])}}">
                            <img src="{{  Storage::url($document->cover_image)   }}" alt="">
                            <div class="card-body">
                            <h3>{{ $document->titre }}</h3>
                            <h4>{{ $document->person }}</h4>
                            <p class="clamp-4 ">{{ $document->description }}</p>
                            اقرأ المزيد...</a>
                            </div>
                        </div>
                
                        </div>
                    @endforeach
                  </div>
                </div>
            </section>


            <!-- Start: Shop Item -->
            {{-- <div class="row product-page-list justify-content-center">

               
                @foreach ($documents as $document)
                
                    <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10" id="card-doc">

                                <div class="card">
                                        <div class="product-item">
                                            <div class="product-item__image">
                                                <span class="like-icon">
                                                </span>
                                                <img src="{{  Storage::url($document->cover_image)   }}" alt="Couverture du Livre" class="img-standard mx-auto d-block mt-2">
                                            </div>
                                            <div class="card-body px-20 pb-25 pt-25" >
                                                <div class="product-item__body text-capitalize">
                                                    
                                                     <h6 class="card-title">{{ $document->titre }}</h6>
                                                    
                                                    <p class="card-text"><strong>Auteur:</strong> {{ $document->person }}</p>
                                                    <p class="card-text">Type: {{ $document->type->libelle_type }}</p>
                                                    <p class="card-text clamp-4 ">{{ $document->description }}</p>
                                                    
                                                </div>
                                
                                                <div class="product-item__button d-flex mt-20 flex-wrap" >
                                                    <a  href="{{ route('ecommerce.product_detail',['language' => app()->getLocale(),'id'=>$document->id])}}">
                                                        <button class="voir">
                                                                Voir
                                                        </button>
                                                    </a>
                                                    <button  class="ppdf">
                                                        <a>
                                                            pdf
                                                        </a>
                                                    </button>
                                                        
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                        

                    </div>


                @endforeach
                

               
           
            </div> --}}
            <!-- End: Shop Item -->         
            
        <!-- End: Shop Item -->
        

        <!-- Pagination -->
        
            <div class="col-12 d-flex justify-content-center">
                <div class="user-pagination">
                    <div class="d-flex justify-content-lg-end justify-content-center mt-1 mb-30">
                        <div  class="pagination">
                            Pagination ????
                        </div>
                    </div>
                </div>
            </div>
        
        </div><!-- End: .columns-2 -->
    </div>
</div>
</div>
</div>
</div>
</div>