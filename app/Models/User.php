<?php

namespace App\Models;


use App\Models\Note;
use App\Models\Role;
use App\Models\Cours;
use App\Models\DemandeF;
use App\Models\Evenement;
use App\Models\Commentaire;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

     // Rest omitted for brevity

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    public function roles(){
        return $this->belongsToMany(Role::class, 'role_users', 'user_id', 'role_id');
    }
    public function commentaires(){
        return $this->hasMany(Commentaire::class);
    }
    public function notes(){
        return $this->hasMany(Note::class);
    }
    public function demandes(){
        return $this->belongsTo(DemandeF::class);
    }
    public function cours(){
        return $this->hasMany(Cours::class);
    }
    public function evenement(){
        return $this->hasMany(Evenement::class);
    }

}
