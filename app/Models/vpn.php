<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vpn extends Model
{
    use HasFactory;
    protected $table = "niapp_vpn";
    protected $fillable = [
        'name',
        'username',
        'password',
        'tell',
        'starttime',
        'month',
    ] ;
}
