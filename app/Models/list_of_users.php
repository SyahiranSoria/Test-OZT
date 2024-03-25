<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class list_of_users extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_name',
        'user_phone',
        'user_email',
        'user_address',
        'user_image',
    ];
}
