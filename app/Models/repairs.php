<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class repairs extends Model
{
    use HasFactory;
    protected $table = "niapp_repairs";
    protected $fillable = [
        'name',
        'model',
        'tell',
        'imei',
        'price',
        'facestatus',
        'card',
        'lock',
        'status',
    ];




}
