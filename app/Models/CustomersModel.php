<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomersModel extends Model
{
    use HasFactory;

    protected $table = "customers";

    // protected $guarded = ['id'];

    protected $fillable = [
        'first_name',
        'last_name',
        'gander',
        'born',
        'email',
        'street',
        'city',
        'province',
        'zip_code',
        'country',
        'number',
        'social_media',
        'password',
        'remember_token',
    ];

    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];
}
