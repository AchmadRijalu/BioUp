<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCharacter extends Model
{
    use HasFactory;

    protected $primaryKey = 'usercharID';

    protected $table = 'bio12_users_characters';
}
