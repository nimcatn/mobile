<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gmail extends Model
{
    use HasFactory;
    protected $table = "niapp_gmail";
    protected $fillable = [
        'name',
<<<<<<< HEAD
        'username',
        'password',
        'tell',
    ] ;
=======
        'tell',
        'username',
        'password',
];
>>>>>>> c64ed7399d03d6b99260cd9645871b4da0fd3686
}
