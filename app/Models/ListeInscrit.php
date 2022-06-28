<?php

namespace App\Models;

use App\Models\Evenement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ListeInscrit extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function evenement(){
        return $this->belongsTo(Evenement::class);
    }
    
}
