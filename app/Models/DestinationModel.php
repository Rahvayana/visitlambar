<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DestinationModel extends Model
{
    use HasFactory;

    protected $table = "destination";

    protected $fillable = [
        'id',
        'destination',
        'price',
        'min_guest',
        'description',
        'interest',
        'location',
        'id_tour',
        'main_image',
    ];
}
