<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    // We bring the table from the database.
    protected $table = 'users';

    // We bring all the properties that can be manipulated.
    protected $fillable = [
        'name',
        'lastname',
        'email',
        'phone',
        'password',
        'created_by',
        'is_restricted',
    ];
}
