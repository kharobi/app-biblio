<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Document;
use Livewire\WithPagination;

use function PHPUnit\Framework\isNull;

class DocumentsShow extends Component
{
    use WithPagination;
    
    protected $paginationTheme = 'bootstrap';

    protected $listeners =['reloadDocuments'];

    protected $documents;

    public $query='';
    public $type;


    public function updatingQuery()
    {
        $this->resetPage();
    }

    public function updatingType()
    {
        $this->resetPage();
    }



    

    public function render()
    {    $this->documents = new Document();
        //dd($this->type);
        return view('livewire.documents-show',[
            

                 'documents' => $this->documents->filtre($this->type,$this->query)->paginate(5)
        ]);


        // return view('livewire.documents-show',[
        //     'documents' => Document::when(true, function ($query1) {  
        //                 if (isNull($this->type)) {
        //                     return $query1->whereNotNull('type_id')->where('person','like','%'.$this->query.'%');
        //                 }else{
        //                     dd($this->type);
        //                     return $query1->where('type_id', $this->type)->where('person','like','%'.$this->query.'%');
        //                 }
        //             })->paginate(5),
        // ]);
        
    }

    public function reloadDocuments(  $query , $type_id  ){

        $this->query = $query;
        $this->type = $type_id;
        //dd($this->type);


        
         }

}
