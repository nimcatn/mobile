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
        'username',
        'password',
        'tell',
    ] ;
}
