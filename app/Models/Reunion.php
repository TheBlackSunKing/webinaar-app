<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reunion extends Model
{
    protected $perPage = 20;
    use HasFactory;
    protected $fillable = [
        'estimate_time',
        'name',
        'description',
        //'country',
    ];
}
