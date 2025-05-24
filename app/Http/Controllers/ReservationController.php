<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Facades\Session;

class ReservationController extends Controller
{
    // Affiche la première étape du formulaire
    public function step1()
    {
        return view('reservation.step1'); // Vue pour la première étape
    }

    // Traite la soumission de la première étape
    public function postStep1(Request $request)
    {
        // Validation des données de la première étape
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'pseudo' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'sex' => 'required|in:M,F',
            'email' => 'required|email',
            'phone_number' => 'required|string|max:15', // Validation pour le numéro de téléphone
        ]);

        // Stocker les données utilisateur dans la session
        Session::put('user_data', $validated);

        // Rediriger vers la deuxième étape
        return redirect()->route('reservation.step2');
    }

    // Affiche la deuxième étape du formulaire
    public function step2()
    {
        return view('reservation.step2'); // Vue pour la deuxième étape
    }

    // Traite la soumission de la deuxième étape
    public function postStep2(Request $request)
    {
        // Validation des données de la seconde étape
        $validated = $request->validate([
            'game_type' => 'required|string|max:255',
            'protection_type' => 'required|string|max:255',
            'magazine_count' => 'required|integer|min:1', // Validation du nombre de chargeurs
            'game_date' => 'required|date', // Validation de la date
            'game_time' => 'required|date_format:H:i', // Validation pour l'heure
            'game_count' => 'required|integer|min:1', // Validation du nombre de parties
        ]);

        // Récupérer les données utilisateur de la session
        $userData = Session::get('user_data');

        // Créer une nouvelle réservation avec les données fusionnées
        $reservationData = array_merge($userData, $validated);
        Reservation::create($reservationData);

        // Nettoyer les données de session
        Session::forget('user_data');

        // Redirection après la sauvegarde réussie
        return redirect()->route('index')->with('success', 'Votre réservation a été enregistrée avec succès !');
    }
}
