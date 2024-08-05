<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Définir les attributs qui peuvent être remplis en masse
    protected $fillable = [
        'name',
    ];

    /**
     * Une catégorie peut avoir plusieurs événements.
     */
    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
