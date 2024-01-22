<?php

namespace App\Http\Livewire;

use App\Models\Categorie;
use App\Models\Document;
use Livewire\Component;

class SearchCategory extends Component
{
    public $query;
    public $resultat;



    public function render()
    {

        return view(
            'livewire.search-category',
            [
                'cats' => Categorie::all(),
                'resultats' => Document::where('titre', $this->query)->get(), //il faut revoir pour faire la recherche


            ]
        );
    }

    // public function filter(){
    //     //dd($this->type_id);
    //     if(!empty($this->query)){
    //         dd($this->query);
    //     }

    // }


}
