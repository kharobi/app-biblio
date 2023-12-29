<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = [];
 
    public function documents(){
        return $this->hasMany(Document::class);
    }

    public function categories(){
        return $this->belongsTo(Categorie::class);
    }


}
