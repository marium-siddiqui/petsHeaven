<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adopt extends Model
{
    use HasFactory;
    protected $fillable = ['Pet_Type',
    'FirstName',
    'email',
    'number',
    'address',
    'reasonfor_adoption',
    'previous_experience',
    'payment_method'
];
}
