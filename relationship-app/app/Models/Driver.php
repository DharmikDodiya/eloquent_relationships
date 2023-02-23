<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Driver extends Model
{
    use HasFactory;
    public function passenger()
    {
        return $this->hasOneThrough(Passenger::class,Vehicle::class,'passenger_id','id');
    }
}
