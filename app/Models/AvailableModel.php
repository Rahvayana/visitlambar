<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvailableModel extends Model
{
    use HasFactory;

    protected $table = "available_seat";

    protected $fillable = [
        'id_tour',
        'tour_name',
        'date_start',
        'date_end',
        'day',
        'max_seat',
        'discount',
        'price',
        'booking_fee',
        'other_fee',
    ];
}
