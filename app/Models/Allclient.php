<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allclient extends Model
{
    use HasFactory;

    protected $table = 'allclients';

    protected $fillable = [
        'fullname',
        'address',
        'plan',
        'accountNumber'
    ];
}
