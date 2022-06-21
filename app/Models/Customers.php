<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'share_id',
        'customer_id',
        'customer_name',
        'customer_email',
    ];
}
