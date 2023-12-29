@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')


 <!-- debut carousel --> 
             @include('pages.applications.ecommerce._carousel_cartes',$documents)

 <!-- fin carousel --> 


 
    <!-- Boucle pour afficher les boutons de type -->
    @livewire('sous-categorie')

    {{-- <div class="d-flex flex-row-reverse justify-content-center bd-highlight mb-3">
        @php
           $i=0 
        @endphp
        @foreach ($cats as $cat)
        @php
            $i++
        @endphp
        <div class="p-2 bd-highlight">
            <button class="btn btn-lg btn-outline-success" id="btn-type"  data-bs-toggle="collapse" data-bs-target="#TypeDeChaqueCat">
                    {{ $cat->libelle_cat}}
            </button>
        </div>

        
            
        @if ($i % 6 == 0 && $i !== 12)
                </div><div class="d-flex flex-row-reverse justify-content-center bd-highlight mb-3">
        @endif


        @endforeach

        
            

            
       
            
    </div> --}}

            @livewire('documents-filtre')
            @livewire('documents-show')

            
            {{-- @include('pages.applications.ecommerce.test-products') --}}
@endsection