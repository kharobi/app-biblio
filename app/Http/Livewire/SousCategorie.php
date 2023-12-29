<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categorie;

class SousCategorie extends Component
{
    public $categories;
    public $types;
    public $type_id;
    public $query;
    
    public function mount(){
        $this->types = [];
    }

    public function render()
    {
        
        return view('livewire.sous-categorie',[
            'cats' => Categorie::all(),
            'types' => $this->types,
        ]);
    }

    public function souscat($cat_id)
    {   
        
        $categorie = Categorie::findOrFail($cat_id);
        $this->types = $categorie->types;
        
    }

    public function selectType($typeId)
    {
        //dd($typeId);
        //$type = Type::find($typeId);
        //dd($type->documents);
        $this->type_id = $typeId;
        $this->filter(); // Appel de la méthode de filtre après la sélection du type
    }

    public function filter(){
        //dd($this->type_id);
        $this->emitTo('documents-show','reloadDocuments',$this->query,$this->type_id);
    }
    
}
