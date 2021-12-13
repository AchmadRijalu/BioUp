<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCharacter extends Model
{
    use HasFactory;

    protected $fillable = ['character_id', 'user_id', 'score'];

    public $timestamps = false;

    protected $table = 'bio12_user_characters';

}
