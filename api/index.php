<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ateliers PHP - Anas Dev Web</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f4f6f9;
            color: #333;
        }

        header {
            background: #0d6efd;
            color: white;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            font-size: 2rem;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 40px auto;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
        }

        .card {
            background: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h3 {
            margin-bottom: 10px;
            color: #0d6efd;
        }

        .card p {
            font-size: 14px;
            margin-bottom: 15px;
        }

        .card a {
            display: inline-block;
            padding: 10px 15px;
            background: #0d6efd;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-size: 14px;
        }

        .card a:hover {
            background: #084298;
        }

        footer {
            text-align: center;
            padding: 20px;
            margin-top: 40px;
            background: #222;
            color: white;
        }

        /* Responsive */
        @media (max-width: 600px) {
            header h1 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>

<body>

<header>
    <h1>💻 Mes Ateliers PHP</h1>
    <p>Par Anas Dev Web</p>
</header>

<div class="container">
    <div class="grid">

        <!-- Atelier 1 -->
        <div class="card">
            <h3>📌 Atelier 1 : Formulaire PHP</h3>
            <p>Création d’un formulaire avec traitement des données en PHP.</p>
            <a href="#">Voir projet</a>
        </div>

        <!-- Atelier 2 -->
        <div class="card">
            <h3>📌 Atelier 2 : Connexion MySQL</h3>
            <p>Connexion à une base de données avec PDO et affichage des données.</p>
            <a href="#">Voir projet</a>
        </div>

        <!-- Atelier 3 -->
        <div class="card">
            <h3>📌 Atelier 3 : CRUD</h3>
            <p>Application complète CRUD (Créer, Lire, Modifier, Supprimer).</p>
            <a href="#">Voir projet</a>
        </div>

        <!-- Atelier 4 -->
        <div class="card">
            <h3>📌 Atelier 4 : Authentification</h3>
            <p>Système de login / logout avec sessions PHP.</p>
            <a href="#">Voir projet</a>
        </div>

    </div>
</div>

<footer>
    <p>© 2026 Anas Dev Web - Tous droits réservés</p>
</footer>

</body>
</html>