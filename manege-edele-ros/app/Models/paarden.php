<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paarden extends Model
{
    use HasFactory;
    
    protected $table = 'paarden';
    protected $fillable = [
        'naam',
        'geboortedatum',
        'geslacht',
        'tamheid',
    ];
}
