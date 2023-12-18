<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Document;
use Livewire\WithPagination;


class DocumentsShow extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    protected $listeners =['reloadDocuments'];

    protected $documents;
    

   
    public function mount(){

        $this->documents = Document::get();
        //dd($this->documents);
       
    }
    public function render()
    {
        
        return view('livewire.documents-show',[
            'documents' => $this->documents
        ]);
        // return view('livewire.documents-show',compact('docs'));
        
    }

    public function reloadDocuments(  $query , $type_id  ){

        $this->documents = Document::query();
        
        if($type_id){
            // dd($type_id);
            //$this->documents = $this->documents->where('type_id',$type_id);
            $this->documents = $this->documents->when($type_id, function ($query1, $type_id) {   
                if ($type_id == "null") {
                    return $query1->whereNotNull('type_id');
                }else{
                    return $query1->where('type_id', $type_id);
                }
            });
        }
        if($query){
            $this->documents = $this->documents->where('person','like','%'.$query.'%');
        }

        $this->documents = $this->documents->get();

    }
}
