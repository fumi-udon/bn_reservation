<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notre Philosophie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --deep-blue: #1a2c42;
            --accent-blue: #2c4a6d;
            --soft-gray: #8e9396;
            --light-gray: #f4f5f6;
            --warm-white: #fcfcfa;
        }

        body {
            background: var(--warm-white);
            font-family: "Times New Roman", serif;
            padding: 2rem;
            margin: 0;
            color: var(--deep-blue);
        }

        .credo-container {
            width: 210mm;
            /* A4 width */
            height: 297mm;
            /* A4 height */
            background: white;
            padding: 25mm;
            margin: 0 auto;
            position: relative;
            isolation: isolate;
            overflow: hidden;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.03);
        }

        .credo-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(165deg,
                    rgba(231, 230, 228, 0.3) 0%,
                    rgba(214, 213, 211, 0.1) 100%);
            opacity: 0.7;
            z-index: -1;
        }

        .main-title {
            font-size: 2.2rem;
            text-align: center;
            margin-bottom: 2rem;
            letter-spacing: 0.1em;
            position: relative;
            padding-bottom: 1rem;
        }

        .main-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 2px;
            background: var(--deep-blue);
        }

        .philosophy-quote {
            font-size: 1.5rem;
            text-align: center;
            font-style: italic;
            margin: 2rem 0;
            line-height: 1.6;
        }

        .section-title {
            font-size: 1.4rem;
            margin: 2.5rem 0 1.5rem;
            letter-spacing: 0.05em;
            border-left: 3px solid var(--deep-blue);
            padding-left: 1rem;
        }

        .promise-list,
        .practice-list,
        .avoid-list {
            list-style-type: none;
            padding-left: 0;
        }

        .promise-list li,
        .practice-list li,
        .avoid-list li {
            margin-bottom: 1rem;
            font-size: 1.1rem;
            line-height: 1.6;
            padding-left: 2rem;
            position: relative;
        }

        .promise-list li::before,
        .practice-list li::before,
        .avoid-list li::before {
            content: '•';
            position: absolute;
            left: 0.5rem;
            color: var(--accent-blue);
        }

        .print-button {
            position: fixed;
            top: 20px;
            right: 20px;
            background: var(--deep-blue);
            color: white;
            border: none;
            padding: 8px 16px;
            font-size: 0.9rem;
            letter-spacing: 0.1em;
            cursor: pointer;
            z-index: 1000;
            transition: background 0.3s ease;
        }

        .print-button:hover {
            background: var(--accent-blue);
        }

        @media print {
            @page {
                size: A4 portrait;
                margin: 0;
            }

            body {
                width: 210mm;
                height: 297mm;
                margin: 0;
                padding: 0;
            }

            .credo-container {
                box-shadow: none;
                margin: 0 !important;
                padding: 25mm !important;
            }

            .no-print {
                display: none !important;
            }
        }
    </style>
</head>

<body>
    <button class="print-button no-print" onclick="window.print()">Imprimer</button>

    <div class="credo-container">
        <h1 class="main-title">Notre Philosophie Fondamentale</h1>

        <div class="philosophy-quote">
            "La priorité à un environnement de travail qui respecte l'humain"
        </div>
        <div class="philosophy-quote" style="font-size: 1.3rem;">
            Nous croyons que : Le véritable hospitalité naît de l'harmonie de l'équipe.
        </div>

        <h2 class="section-title">Promesses Entre Collègues</h2>
        <ul class="promise-list">
            <li>Agir pour nos clients au-delà de notre rôle</li>
            <li>Donner des instructions logiques plutôt qu'émotionnelles</li>
            <li>Maintenir des relations professionnelles équitables, en évitant les groupes fermés</li>
        </ul>

        <h2 class="section-title">À Pratiquer</h2>
        <ul class="practice-list">
            <li>Agir au-delà de nos tâches pour la satisfaction du client</li>
            <li>Construire des relations de coopération avec toute l'équipe</li>
        </ul>

        <h2 class="section-title">À Ne Pas Faire</h2>
        <ul class="avoid-list">
            <li>Reproches et critiques émotionnels</li>
            <li>Monopolisation des connaissances et techniques</li>
            <li>Formation de groupes fermés</li>
            <li>Comportements isolant les nouveaux</li>
            <li>Actions perturbant l'harmonie de l'équipe</li>
        </ul>
    </div>
</body>

</html>
