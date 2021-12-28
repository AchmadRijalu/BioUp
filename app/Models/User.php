<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'name',
        'school',
        'city',
        'birthyear',
        'is_login',
        'is_active',
    ];

    protected $primaryKey = 'id';

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function findForPassport($username)
    // {
    //     return $this->where('username', $username)->first();
    // }

    public function characters(){
        return $this->belongsToMany(Character::class, 'bio12_user_characters')->withPivot('score');
    }

    // public function characters() //untuk table bio12_user_levels
    // {
    //     return $this->belongsToMany(Character::class, 'bio12_user_levels')->withPivot('levelID');
    // }

    public function levels()
    {
        return $this->belongsToMany(Level::class, 'bio12_user_levels')->withPivot('score');
    }

    // public function character() //untuk table bio12_user_characters
    // {
    //     return $this->belongsToMany(Character::class, 'bio12_user_characters')->withPivot('userID');
    // }
    public function leaderboard()
    {
        return $this->belongsTo(leaderboard::class);
    }
}
