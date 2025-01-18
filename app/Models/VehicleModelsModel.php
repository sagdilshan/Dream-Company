<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleModelsModel extends Model
{
    use HasFactory;
    protected $table = 'vehicle_models';
    protected $guarded = [];
}
