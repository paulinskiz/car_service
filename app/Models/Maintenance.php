<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vehicle;
use App\Models\User;

class Maintenance extends Model
{
    use HasFactory;

    private $fillabe = [
        'vehicle_id',
        'order_description',
        'status',
        'finished',
    ];

    public function vehicle()
    {
        return $this->hasOne(Vehicle::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comment()
    {
        return $this->hasOne(Comment::class);
    }


}
