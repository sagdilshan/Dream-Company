<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectModel extends Model
{
    use HasFactory;
    protected $table = 'projects';
    protected $guarded = [];

    public function customer()
{
    return $this->belongsTo(CustomerModel::class, 'assign_customer'); // 'customer_id' is the foreign key
}
}
