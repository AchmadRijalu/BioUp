<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leaderboard extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'totalscore'];

    protected $table = 'bio12_leaderboards';

    public function users()
    {
        return $this->hasOne(User::class , 'id', 'user_id');
    }
}
