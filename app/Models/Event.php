<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    // Définir les attributs qui peuvent être remplis en masse
    protected $fillable = [
        'title',
        'description',
        'date_time',
        'location',
        'category_id',
    ];

    /**
     * Un événement appartient à une catégorie.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Un événement peut avoir plusieurs réservations.
     */
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
