<?php

namespace App\Models;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agenda extends Model
{
    use HasFactory;

    public function agendaUsers()
    {
        return $this->belongsToMany(User::class, 'agenda_users');
    }

    public function users()
{
    return $this->belongsToMany(User::class, 'agenda_users', 'agenda_id', 'user_id')->onDelete('cascade');
}



    protected $fillable = [
        'start_datum',
        'eind_datum',
        'lesdoel',
        'soort',
        
    ];

    // public function comment() {
    //     return $this->belongsTo(Comment::class);
    //  }
     

}
