<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLevel extends Model
{
    use HasFactory;

    protected $table = 'bio12_user_levels';
    protected $fillable = ['character_id', 'user_id', 'score','level_id'];
}
