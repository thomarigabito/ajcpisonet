<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $table = 'applications';

    protected $primaryKey = 'id';

    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'contact',
        'birthday',
        'gender',
        'plan',
        'email',
        'street',
        'barangay',
        'town',
        'province',
        'landmark',
        'uploadid',
        'idselfie'
    ];
}
