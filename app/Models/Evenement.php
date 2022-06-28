<?php

namespace App\Models;

use App\Models\User;
use App\Models\ListeInscrit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Evenement extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function liste_inscrit(){
        return $this->belongsTo(ListeInscrit::class);
    }
}
