<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inschrijvingen extends Model
{
    use HasFactory;

    protected $table = 'inschrijvingen';
    protected $fillable = [
        'naam',
        'leeftijd',
        'geslacht',
        'adres',
        'woonplaats',
        'email',
        'telefoonnummer',
        'lespakket',
        'opmerking'
    ];
}
