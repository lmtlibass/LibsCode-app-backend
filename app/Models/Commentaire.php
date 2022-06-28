<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commentaire extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function cours(){
        return $this->belongsTo(Cours::class);
    }

}
