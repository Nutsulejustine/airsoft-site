<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Étape 1 - Informations personnelles</title>
</head>
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
<body>
    <h1>Informations personnelles</h1>
    <form method="POST" action="{{ route('reservation.postStep1') }}">
        @csrf
        <label>Nom : <input type="text" name="name" required></label><br>
        <label>Prénom/Pseudo : <input type="text" name="pseudo" required></label><br>
        <label>Date de naissance : <input type="date" name="date_of_birth" required></label><br>
        <label>Sexe : 
            <select name="sex" required>
                <option value="M">Masculin</option>
                <option value="F">Féminin</option>
            </select>
        </label><br>
        <label>Email : <input type="email" name="email" required></label><br>
        <label>Téléphone : <input type="text" name="phone_number" required></label><br>

        <button type="submit">Suivant</button>
    </form>
</body>
</html>
