<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelSoal extends Model
{
    use HasFactory;

    protected $primaryKey = 'levelsoalID';

    protected $table = 'bio12_levels_soals';
}
