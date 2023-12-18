@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')


 <!-- debut carousel --> 
             @include('pages.applications.ecommerce._carousel_cartes',$documents)

 <!-- fin carousel --> 


 
    <div class="d-flex flex-row-reverse justify-content-center bd-highlight mb-3">
        @php
           $i=0 
        @endphp
        @foreach ($types as $type)
        @php
            $i++
        @endphp
        <div class="p-2 bd-highlight">
            <button class="btn btn-lg btn-outline-success" >
                    {{ $type->libelle_type }}
            </button>
        </div>
            
        @if ($i % 6 == 0 && $i !== 12)
                </div><div class="d-flex flex-row-reverse justify-content-center bd-highlight mb-3">
        @endif


        @endforeach

        
            

            
       
            
    </div>


            @livewire('documents-filtre')
            @livewire('documents-show')
@endsection