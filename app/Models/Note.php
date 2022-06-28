<?php

namespace App\Models;

use App\Models\User;
use App\Models\Cours;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Note extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function cours(){
        return $this->belongsTo(Cours::class);
    }
    public function users(){
        return $this->belongsTo(User::class);
    }
}
