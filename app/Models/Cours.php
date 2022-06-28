<?php

namespace App\Models;

use App\Models\Note;
use App\Models\User;
use App\Models\Module;
use App\Models\Commentaire;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cours extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function commentaires(){
        return $this->hasMany(Commentaire::class);
    }
    public function notes(){
        return $this->hasMany(Note::class);
    }
    public function modules(){
        return $this->belongsTo(Module::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}   
