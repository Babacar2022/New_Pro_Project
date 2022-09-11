<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fliere extends Model
{
    use HasFactory;
    protected $guarded = [];

    //One To Many (hasMany)
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
