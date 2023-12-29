<div>

    <div class="d-flex flex-row justify-content-center bd-highlight mb-3">
        @php
           $i=0 
        @endphp
        @foreach ($cats as $cat)
        @php
            $i++
        @endphp
        <div class="p-2 bd-highlight">
            <button class="btn btn-lg btn-outline-success" id="btn-type"   wire:click="souscat({{ $cat->id }})">
                    {{ $cat->libelle_cat}}
            </button>
        </div>
     
        @if ($i % 6 == 0 && $i !== 12)
                </div><div class="d-flex flex-row justify-content-center bd-highlight mb-3">
        @endif


        @endforeach
  </div>



  @if (count($types) > 0)
  <div class="d-flex flex-row justify-content-center bd-highlight mb-3">
    @php
       $i=0 
    @endphp
    @foreach($types as $type)
    @php
        $i++
    @endphp
    <div class="p-2 bd-highlight">
        <button class="btn btn-lg btn-outline-success" id="btn-type" wire:click="selectType({{ $type->id }})" >
            {{ $type->libelle_type }}
        </button>
    </div>
 
    @if ($i % 6 == 0 && $i !== 12)
            </div><div class="d-flex flex-row justify-content-center bd-highlight mb-3">
    @endif


    @endforeach
    <button class="btn btn-lg btn-outline-success" id="btn-type" wire:click="selectType('null')" >
        جميع الإختصاصات
    </button>
</div>
@endif


</div>
