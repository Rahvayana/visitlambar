<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourModel extends Model
{
    use HasFactory;

    protected $table = "tour";

    protected $fillable = [
        'id',
        'name',
        'desc',
        'interest',
        'plan',
        'feature',
        'min_guest',
        'price',
        'start',
        'end',
        'time',
        'main_image',
    ];
}
