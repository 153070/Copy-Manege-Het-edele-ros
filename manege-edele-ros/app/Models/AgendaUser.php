<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgendaUser extends Model
{
    use HasFactory;

    public function agenda()
    {
        return $this->belongsTo(agenda::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
