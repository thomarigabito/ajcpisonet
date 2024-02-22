<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allclient extends Model
{
    use HasFactory;

    protected $table = 'allclients';

    protected $primaryKey = 'id';

    protected $fillable = [
        'fullname',
        'address',
        'plan',
        'user_id',
        'accountNumber'
    ];
}
