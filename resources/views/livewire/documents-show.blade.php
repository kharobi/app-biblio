
    <div class="tab-content mt-25" id="ap-tabContent">
        <div class="tab-pane fade show active" id="ap-overview" role="tabpanel" aria-labelledby="ap-overview-tab">
            
            <!-- Start: Shop Item -->
            <div class="row product-page-list justify-content-center">

               
                @foreach ($documents as $document)
                
                    <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">

                                <div class="card product product--grid">
                                    <div class="h-100">
                                        <div class="product-item">
                                            <div class="product-item__image">
                                                <span class="like-icon">
                                                    <button type="button" class="content-center">
                                                        <i class="lar la-heart icon"></i>
                                                    </button>
                                                </span>
                                                <img src="{{  Storage::url($document->cover_image)   }}" alt="Couverture du Livre" class="img-standard mx-auto d-block mt-2">
                                            </div>
                                            <div class="card-body px-20 pb-25 pt-25" style="margin-left: auto;">
                                                <div class="product-item__body text-capitalize text-end">
                                                    
                                                     <h6 class="card-title">{{ $document->titre }}</h6>
                                                    
                                                    <p class="card-text"><strong>Auteur:</strong> {{ $document->person }}</p>
                                                    <p class="card-text">Type: {{ $document->type->libelle_type }}</p>
                                                    <p class="card-text clamp-4 ">{{ $document->description }}</p>
                                                    
                                                </div>
                                
                                                <div class="product-item__button d-flex mt-20 flex-wrap" >
                                                    <a  href="{{ route('ecommerce.product_detail',['language' => app()->getLocale(),'id'=>$document->id])}}">
                                                        <button class="btn btn-default btn-squared color-light btn-outline-light px-20">
                                                                Voir
                                                        </button>
                                                    </a>
                                                    <button  class="btn btn-danger btn-squared color-light btn-outline-light px-20">
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
                        

                    </div>


                @endforeach
                

               
           
            </div>
            <!-- End: Shop Item -->         
            
        <!-- End: Shop Item -->
        

        <!-- Pagination -->
        
            <div class="col-12 d-flex justify-content-center">
                <div class="user-pagination">
                    <div class="d-flex justify-content-lg-end justify-content-center mt-1 mb-30">
                        <div  class="pagination">
                            {{-- {{ $documents->links() }} --}}
                        </div>
                    </div>
                </div>
            </div>
        
        </div><!-- End: .columns-2 -->
    </div>
</div>
</div>
</div>