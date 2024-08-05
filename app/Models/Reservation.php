<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Reservation extends Model
{
    use HasFactory;

    // Définir les attributs qui peuvent être remplis en masse
    protected $fillable = [
        'user_id',
        'event_id',
    ];

    /**
     * Une réservation appartient à un utilisateur.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Une réservation appartient à un événement.
     */
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
