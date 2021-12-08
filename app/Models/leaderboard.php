<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leaderboard extends Model
{
    use HasFactory;

    protected $primaryKey = 'lboardID';

    protected $table = 'bio12_leaderboards';

    public function users()
    {
        return $this->hasMany(User::class, 'userID');
    }
}
