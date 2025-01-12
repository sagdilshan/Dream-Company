<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelCustomerModel extends Model
{
    use HasFactory;
    protected $table = 'travel_customer';
    protected $guarded = [];
}
