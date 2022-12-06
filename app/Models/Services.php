<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    protected $table = "services";

    protected $fillable = [
        'names',
        'email',
        'fch_age',
        'tpo_identification',
        'nro_identification',
        'email',
        'address',
        'phone',
        'phone_two',
    ];

}
