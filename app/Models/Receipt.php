<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    protected $fillable = [
        'name',
        'money',
        'product_id',
        'created_by',
    ];
}
