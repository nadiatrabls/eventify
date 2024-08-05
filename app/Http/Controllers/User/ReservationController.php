<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        // Récupérer les réservations de l'utilisateur authentifié
        $reservations = Reservation::where('user_id', auth()->id())->get();

        // Retourner la vue avec les réservations
        return view('user.reservations.index', compact('reservations'));
    }

    public function destroy(Reservation $reservation)
    {
        // Vérifier que la réservation appartient à l'utilisateur authentifié
        if ($reservation->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        // Supprimer la réservation
        $reservation->delete();

        // Rediriger avec un message de succès
        return redirect()->route('reservations.index')->with('success', 'Reservation cancelled successfully.');
    }
}
