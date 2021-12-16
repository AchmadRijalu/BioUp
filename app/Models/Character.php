<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    protected $table = 'bio12_characters';

    public $timestamps = false;

    public function users(){
        return $this->belongsToMany(User::class, 'bio12_user_characters')->withPivot('score');
    }

    public function levels(){
        return $this->hasMany(Level::class);
    }

    // public function users() //untuk table bio12_user_levels
    // {
    //     return $this->belongsToMany(User::class, 'bio12_user_levels')->withPivot('levelID');
    // }

    public function levels1()
    {
        return $this->belongsToMany(Level::class, 'bio12_user_levels')->withPivot('score');
    }

    // public function user() //untuk table bio12_user_characters
    // {
    //     return $this->belongsToMany(User::class, 'bio12_user_characters')->withPivot('userID');
    // }

    // public function level()
    // {
    //     return $this->hasMany(Level::class, 'charID');
    // }

    // public function uc()
    // {
    //     return $this->hasMany(UserCharacter::class, 'charID');
    // }
}
