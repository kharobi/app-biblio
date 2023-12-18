<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Usamamuneerchaudhary\Commentify\Traits\Commentable;

class Document extends Model
{
    protected $fillable = ['titre', 'description', 'person', 'cover_image', 'document_file','date_doc','type_id'];
    use Commentable;

    public function type(){
        return $this->belongsTo(Type::class);
    }

    public function personnes():BelongsToMany{
        return $this->belongsToMany(Personne::class,'commentaires')->withPivot('commentaire');
    }

}
