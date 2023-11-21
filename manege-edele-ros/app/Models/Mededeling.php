<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mededeling extends Model
{
    use HasFactory;

    protected $table = 'mededelingen';

    protected $fillable = [
        'mededeling'
    ];
}
