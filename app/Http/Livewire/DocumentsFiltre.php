<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Type;


class DocumentsFiltre extends Component
{

    public $query;
    public $type_id;

    public function render()
    { 

            return view('livewire.documents-filtre',[
                'types' => Type::all(),
            ]);

       
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
