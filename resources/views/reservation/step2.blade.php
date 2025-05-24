<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Étape 2 - Réservation</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Lien vers vos styles CSS si nécessaire -->
    <style>
        .alert-success {
            background-color: green;
            color: white;
            padding: 15px;
            margin: 20px 0;
            border-radius: 5px;
            text-align: center;
        }
        .alert-danger {
            background-color: red;
            color: white;
            padding: 15px;
            margin: 20px 0;
            border-radius: 5px;
            text-align: center;
        }
        body {
            font-family: Arial, sans-serif; /* Style de police simple */
            margin: 20px; /* Marges */
        }
        form {
            max-width: 400px; /* Largeur maximale du formulaire */
            margin: auto; /* Centrer le formulaire */
            border: 1px solid #ccc; /* Bordure du formulaire */
            padding: 20px; /* Espacements internes */
            border-radius: 8px; /* Coins arrondis */
            background-color: #f9f9f9; /* Couleur de fond du formulaire */
        }
        h1 {
            text-align: center; /* Centrer le titre */
        }
        label {
            display: block; /* Chaque label occupera une ligne */
            margin-top: 10px; /* Espacement entre les labels */
        }
        button {
            display: block; /* Le bouton occupera une ligne */
            margin: 20px auto; /* Centrer le bouton */
            padding: 10px 20px; /* Espacement interne du bouton */
            background-color: green; /* Couleur de fond du bouton */
            color: white; /* Couleur du texte du bouton */
            border: none; /* Pas de bordure */
            border-radius: 5px; /* Coins arrondis */
            cursor: pointer; /* Curseur en forme de main */
        }
        button:hover {
            background-color: darkgreen; /* Couleur au survol */
        }
    </style>
</head>
<body>
    <h1>Informations de réservation</h1>

    <!-- Affichage des messages d'erreur -->
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('reservation.postStep2') }}">
        @csrf
        <label for="game_type">Type de partie :</label>
        <select name="game_type" id="game_type" required>
            <option value="">Sélectionnez un type de partie</option>
            <option value="type1">Type 1</option>
            <option value="type2">Type 2</option>
            <option value="type3">Type 3</option>
        </select>

        <label for="protection_type">Type de protection :</label>
        <select name="protection_type" id="protection_type" required>
            <option value="">Sélectionnez un type de protection</option>
            <option value="protection1">Protection 1</option>
            <option value="protection2">Protection 2</option>
            <option value="protection3">Protection 3</option>
        </select>

        <label>Nombre de chargeurs : 
            <input type="number" name="magazine_count" required>
        </label>

        <label>Date de la partie : 
            <input type="date" name="game_date" required>
        </label>

        <label>Heure de la partie : 
            <input type="time" name="game_time" required>
        </label>

        <label>Nombre de parties : 
            <input type="number" name="game_count" required>
        </label>

        <button type="submit">Réserver</button>
    </form>
</body>
</html>