<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apple extends Model
{
    use HasFactory;
    protected $table = "niapp_apple";
    protected $fillable = [
        'name',
<<<<<<< HEAD
        'username',
        'password',
        'tell',
    ] ;
=======
        'appleid',
        'password',
        'tell',
    ];
>>>>>>> c64ed7399d03d6b99260cd9645871b4da0fd3686
}
