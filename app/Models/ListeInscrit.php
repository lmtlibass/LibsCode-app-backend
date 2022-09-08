<?php

namespace App\Models;

use App\Models\Evenement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use PhpParser\Node\Expr\List_;

class ListeInscrit extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
  

    public function evenement(){
        return $this->belongsTo(Evenement::class);
    }
   
    
}
