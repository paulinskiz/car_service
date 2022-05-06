<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;
use App\Models\User;
use App\Models\Maintenance;

class Vehicle extends Model
{
    use HasFactory;

    private $fillable = [
        'manufacturer',
        'model',
        'licence_plate',
        'year',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function maintenance()
    {
        return $this->belongsTo(Maintenance::class);
    }
}
