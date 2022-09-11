<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class DemandeInfo extends Model
{
    use HasFactory;
    use Notifiable;

    protected $guarded = [];

    //One To Many (hasMany)
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
