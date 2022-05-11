<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vehicle;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'email',
        'phone_number',
        'vehicle_id',
    ];

    public function vehicle()
    {
        return $this->hasOne(Vehicle::class);
    }
}
