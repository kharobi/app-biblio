<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Usamamuneerchaudhary\Commentify\Traits\Commentable;

use function PHPUnit\Framework\isNull;

class Document extends Model
{
    use Commentable;
    protected $fillable = ['titre', 'description', 'person', 'cover_image', 'document_file','date_doc','type_id'];

    //protected $filterFields = ['titre', 'description', 'person', 'cover_image', 'document_file','date_doc','type_id'];

    public function type(){
        return $this->belongsTo(Type::class);
    }

    public function personnes():BelongsToMany{
        return $this->belongsToMany(Personne::class,'commentaires')->withPivot('commentaire');
    }






    public function filtre($type , $query){
        
        if ($type == null) {
            return $this->whereNotNull('type_id')->where('person','like','%'.$query.'%')
                                                    ->orWhere('titre','like','%'.$query.'%')
                                                    ->orWhere('description','like','%'.$query.'%')
                                                    ->orWhere('pays','like','%'.$query.'%');
        }else{
            //dd($type);
            return $this->where('type_id', $type)->where(function($query1) use($query){
                $query1->where('person','like','%'.$query.'%')
                ->orWhere('titre','like','%'.$query.'%')
                ->orWhere('description','like','%'.$query.'%')
                ->orWhere('pays','like','%'.$query.'%');
            });
        }
    }

}
