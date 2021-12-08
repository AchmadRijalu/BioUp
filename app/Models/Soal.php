<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    use HasFactory;

    protected $primaryKey = 'soalID';

    protected $table = 'bio12_soals';

    public function levels()
    {
        return $this->belongsToMany(Level::class, 'bio12_level_soals')->withPivot('soalID');
    }
}
