<?php

namespace App\Models;

use App\Models\Cours;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Module extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function cours(){
        return $this->hasMany(Cours::class);
    }
    
}
