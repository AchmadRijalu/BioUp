<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    protected $table = 'bio12_levels';

    public function soals(){
        return $this->belongsToMany(Soal::class, 'bio12_level_soals');
    }

    public function char(){
        return $this->belongsTo(Char::class);
    }

    // public function users()
    // {
    //     return $this->belongsToMany(User::class, 'bio12_user_levels')->withPivot('charID');
    // }

    // public function characters() //untuk many to many
    // {
    //     return $this->belongsToMany(Character::class, 'bio12_user_levels')->withPivot('userID');
    // }

    // public function soals()
    // {
    //     return $this->belongsToMany(Soal::class, 'bio12_level_soals')->withPivot('levelID');
    // }

    // public function character() //untuk one to many
    // {
    //     return $this->belongsTo(Character::class, 'charID');
    // }
}
