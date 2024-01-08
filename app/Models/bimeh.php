<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bimeh extends Model
{
    use HasFactory;
    protected $table = "niapp_bimeh";
    protected $fillable = [
            'name',
            'family',
            'birthday',
            'address',
            'postsalcode',
            'irancode',
            'bimehcode',
            'imei',
            'price',
            'model',
            'startday',
            'endday',
            'bimehmode',
            'serial',
    ];
}