<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>ORBEE LOMÉ - Accueil</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Arial Black', sans-serif;
            color: white;
        }

        .overlay {
            background: url('{{ asset("img/1.avif") }}') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 30px;
        }

        .logo {
            width: 150px; /* Changez selon la taille de votre logo */
            margin-bottom: 20px;
        }

        h1 {
            font-size: 4rem;
            margin: 20px 0;
            text-shadow: 2px 2px 4px #000;
        }

        p {
            font-size: 1.5rem;
            margin-bottom: 30px;
        }

        .btn {
            font-size: 1.2rem;
            padding: 15px 30px;
            margin: 10px;
            border: none;
            cursor: pointer;
            border-radius: 8px;
            background-color: rgb(1, 59, 152);
            color: white;
            text-align: center;
            transition: background-color 0.3s;
            text-decoration: none;
        }

        .btn-reserver:hover {
            background-color: rgb(0, 45, 116);
        }

        .btn-contacter {
            background-color: #d63031;
        }

        .btn-contacter:hover {
            background-color: #c0392b;
        }

        .alert-success {
            background-color: green;
            color: white;
            padding: 15px;
            margin: 20px 0;
            border-radius: 5px;
            text-align: center;
        }

        .section {
            max-width: 1000px;
            margin: 50px auto;
            text-align: left;
            line-height: 1.6;
            background-color: rgba(0, 0, 0, 0.9);
            padding: 30px;
            border-radius: 15px;
            color: white;
        }

        footer {
            background-color: #111;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 50px;
            border-top: 2px solid white;
        }

        footer h3 {
            margin-bottom: 10px;
        }

        footer a {
            color: #1e90ff;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- HÉRO (Image + Titre + Boutons) -->
    <div class="overlay">
        <img src="{{ asset('img/logo.png') }}" alt="ORBEE LOMÉ" class="logo"> <!-- Assurez-vous de remplacer par le chemin correct -->
        <h1>ENTREZ DANS L'ACTION</h1>
        <p>Airsoft & Snacks. Une expérience de tir immersive !</p>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div>
            <a href="{{ route('reservation.step1') }}" class="btn btn-reserver">Réserver</a>
        </div>
    </div>

    <!-- SECTION À PROPOS EN DESSOUS DE L'IMAGE -->
    <div class="section">
        <h2>À propos de nous</h2>
        <p>
            ORBEE LOMÉ est le premier centre de simulation Airsoft au Togo, combinant activités tactiques, restauration locale, jeux vidéo et réalité virtuelle. Né du besoin de diversifier les loisirs modernes dans notre région, ce projet vise à offrir une expérience immersive, stratégique et conviviale.
        </p>
        <p>
            Nous proposons une gamme dNous proposons une gamme d’activités adaptées à tous les publics :
            <ul>
                <li>Parties d’Airsoft réalistes et encadrées</li>
                <li>Espaces de restauration valorisant la cuisine locale</li>
                <li>Zone gaming avec jeux vidéo et simulateurs VR</li>
                <li>Activités pour familles, touristes, et événements d’entreprises (team building)</li>
            </ul>
        </p>
        <p>
            Avec un terrain spécialement aménagé, des équipements de sécurité, et un encadrement rigoureux, ORBEE LOMÉ s’impose comme une destination de loisirs incontournable en Afrique de l’Ouest.
        </p>
    </div>

    <!-- SECTION CONTACT EN BAS -->
    <footer>
        <h3>Contactez-nous</h3>
        <p>Email : <a href="mailto:contact@orbee-lome.tg">contact@orbee-lome.tg</a></p>
        <p>Téléphone : <a href="tel:+22890112233">+228 90 11 22 33</a></p>
        <p>Adresse : Lomé, Quartier Amadahomé</p>
        <p>Suivez-nous sur <a href="#">Facebook</a> | <a href="#">Instagram</a></p>
    </footer>

    <script>
        window.onload = function() {
            var successMessage = document.querySelector('.alert-success');
            if (successMessage) {
                setTimeout(function() {
                    successMessage.style.display = 'none';
                }, 5000);
            }
        };
    </script>
</body>
</html>