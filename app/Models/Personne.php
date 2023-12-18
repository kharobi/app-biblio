<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Usamamuneerchaudhary\Commentify\Traits\HasUserAvatar;

class Personne extends Model
{
    protected $fillable = ['nom','prenom','arme','grade','date_naissance','login','mdp','lieu_naissance','etat','admin','ar_nom','ar_prenom','ar_arme','ar_grade','ar_lieu_naissance','an'];
    use HasUserAvatar;
    public function document():BelongsToMany{

        return $this->belongsToMany(Document::class,'commentaires')->withPivot('commentaire');
    }

}
