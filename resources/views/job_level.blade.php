<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bistro Nippon | Grille des Niveaux (Bright)</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700;900&family=Montserrat:wght@400;600;700;800&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* ■■■ PRINT SETTINGS (A4 Portrait) ■■■ */
        @page {
            size: A4;
            margin: 0;
        }

        @media print {
            body {
                background: white;
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }

            .no-print {
                display: none !important;
            }

            .sheet {
                width: 100% !important;
                height: 100vh !important;
                padding: 10mm !important;
                box-shadow: none !important;
            }
        }

        /* ■■■ STYLES ■■■ */
        :root {
            --navy: #0F172A;
            --gold: #B8860B;
            /* 少し深みのあるゴールド */
            --text: #1e293b;
            --gray: #64748b;
            --light-gray: #f1f5f9;
        }

        body {
            background: #e2e8f0;
            font-family: 'Montserrat', sans-serif;
            display: flex;
            justify-content: center;
            padding: 20px;
        }

        .sheet {
            background: white;
            width: 210mm;
            min-height: 297mm;
            /* A4 */
            padding: 15mm;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
        }

        /* Header */
        header {
            border-bottom: 4px solid var(--navy);
            margin-bottom: 20px;
            padding-bottom: 15px;
            text-align: center;
        }

        h1 {
            font-family: 'Cinzel', serif;
            font-size: 32px;
            color: var(--navy);
            margin: 0;
            letter-spacing: 2px;
            font-weight: 900;
        }

        .subtitle {
            font-size: 11px;
            font-weight: 700;
            color: var(--gold);
            text-transform: uppercase;
            letter-spacing: 3px;
            margin-top: 5px;
            display: block;
        }

        /* Matrix Container */
        .matrix {
            display: flex;
            flex-direction: column;
            gap: 8px;
            flex-grow: 1;
        }

        /* Row Layout (General) */
        .row-box {
            display: flex;
            border: 1px solid #cbd5e1;
            background: #fff;
            min-height: 95px;
        }

        /* LEFT: Info Column (40%) */
        .info-col {
            width: 40%;
            padding: 10px 15px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            border-right: 2px dashed #cbd5e1;
        }

        /* RIGHT: Name Column (60%) */
        .name-col {
            width: 60%;
            background-color: #f8fafc;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .name-placeholder {
            font-size: 10px;
            color: #cbd5e1;
            font-weight: 700;
            letter-spacing: 2px;
            position: absolute;
            bottom: 5px;
            right: 5px;
            text-transform: uppercase;
        }

        /* Typography & Elements */
        .level-header {
            display: flex;
            align-items: center;
            margin-bottom: 6px;
        }

        .badge-lvl {
            font-family: 'Cinzel', serif;
            font-size: 18px;
            font-weight: 700;
            padding: 2px 8px;
            border-radius: 2px;
            min-width: 35px;
            text-align: center;
            margin-right: 10px;
        }

        .role-name {
            font-family: 'Montserrat', sans-serif;
            font-size: 15px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .tp-badge {
            font-size: 10px;
            font-weight: 700;
            padding: 2px 6px;
            border: 1px solid var(--navy);
            border-radius: 2px;
            color: var(--navy);
            white-space: nowrap;
            margin-left: auto;
        }

        /* Lists */
        ul {
            margin: 0;
            padding-left: 0;
            list-style: none;
        }

        li {
            font-size: 10px;
            color: var(--gray);
            font-weight: 500;
            line-height: 1.4;
            margin-bottom: 2px;
        }

        li strong {
            color: var(--text);
            font-weight: 700;
            text-transform: uppercase;
            font-size: 9px;
            margin-right: 3px;
        }

        /* =========================================
           PRIVILEGED CLASS DESIGN (L4, L5, L6)
           White base with strong GOLD accents
           ========================================= */
        .privileged {
            border-left: 8px solid var(--gold);
            /* 左枠を金色に */
            min-height: 100px;
        }

        .privileged .badge-lvl {
            background: var(--gold);
            color: var(--navy);
        }

        .privileged .role-name {
            color: var(--gold);
        }

        .privileged li strong {
            color: var(--navy);
        }

        /* ネームプレートエリアも明るく */
        .privileged .name-col {
            background-color: #fffaf0;
            /* ほんのりゴールドがかった白 */
        }

        /* =========================================
           STANDARD CLASS (L3, L2, L1, COMMIS)
           White base with NAVY accents
           ========================================= */
        .standard {
            border-left: 5px solid var(--navy);
        }

        .standard .badge-lvl {
            background: var(--navy);
            color: white;
        }

        .standard .role-name {
            color: var(--navy);
        }

        /* COMMIS special styling */
        .standard.commis {
            border-left: 5px solid #cbd5e1;
        }

        .standard.commis .badge-lvl {
            background: #cbd5e1;
            color: var(--gray);
        }

        .standard.commis .role-name {
            color: var(--gray);
        }

        /* Height Adjustments for Staff Volume */
        .row-box.l3 {
            min-height: 110px;
        }

        .row-box.l2 {
            min-height: 120px;
        }

        .row-box.l1 {
            min-height: 135px;
        }

        /* Largest area */
        .row-box.commis {
            min-height: 100px;
        }

        /* Footer */
        footer {
            margin-top: auto;
            border-top: 1px solid #cbd5e1;
            padding-top: 15px;
            text-align: center;
        }

        .eval-note {
            font-family: 'Cinzel', serif;
            font-size: 11px;
            color: var(--navy);
            font-weight: 700;
            letter-spacing: 1px;
        }

        .eval-sub {
            font-size: 9px;
            color: var(--gray);
            margin-top: 4px;
            font-weight: 500;
        }
    </style>
</head>

<body>

    <div class="sheet">
        <header>
            <h1>GRILLE DES NIVEAUX</h1>
            <span class="subtitle">BISTRO NIPPON CAREER PATH</span>
        </header>

        <div class="matrix">

            <div class="row-box privileged">
                <div class="info-col">
                    <div class="level-header">
                        <span class="badge-lvl">L6</span>
                        <span class="role-name">DIRECTEUR</span>
                    </div>
                    <ul>
                        <li><strong>RENTABILITÉ:</strong> Maximiser le ROI et les Profits.</li>
                        <li><strong>LOGIQUE:</strong> Résoudre par les règles, sans blâmer.</li>
                        <li><strong>STRATÉGIE:</strong> Vision à long terme.</li>
                    </ul>
                </div>
                <div class="name-col"><span class="name-placeholder">DIRECTION</span></div>
            </div>

            <div class="row-box privileged">
                <div class="info-col">
                    <div class="level-header">
                        <span class="badge-lvl">L5</span>
                        <span class="role-name">MANAGER</span>
                    </div>
                    <ul>
                        <li><strong>GARDIEN QSC:</strong> 100% Qualité, Service, Propreté.</li>
                        <li><strong>CRISE:</strong> Résoudre les problèmes instantanément.</li>
                        <li><strong>FLUX:</strong> La bonne personne à la bonne place.</li>
                    </ul>
                </div>
                <div class="name-col"><span class="name-placeholder">MANAGEMENT</span></div>
            </div>

            <div class="row-box privileged">
                <div class="info-col">
                    <div class="level-header">
                        <span class="badge-lvl">L4</span>
                        <span class="role-name">LEADER</span>
                    </div>
                    <ul>
                        <li><strong>MODÈLE:</strong> Être l'exemple à suivre.</li>
                        <li><strong>PÉDAGOGUE:</strong> Enseigner le "Pourquoi", pas juste le "Comment".</li>
                        <li><strong>PROACTIF:</strong> Agir avant qu'on ne demande.</li>
                    </ul>
                </div>
                <div class="name-col"><span class="name-placeholder">LEADERS</span></div>
            </div>

            <div class="row-box standard l3">
                <div class="info-col">
                    <div class="level-header">
                        <span class="badge-lvl">L3</span>
                        <span class="role-name">EXPERT</span>
                        <span class="tp-badge">TP: 100%</span>
                    </div>
                    <ul>
                        <li><strong>QUALITÉ:</strong> Vitesse et précision irréprochables.</li>
                        <li><strong>COÛT:</strong> Zéro gaspillage (Nourriture, Énergie).</li>
                        <li><strong>VALEURS:</strong> Incarner la philosophie de la maison.</li>
                    </ul>
                </div>
                <div class="name-col"><span class="name-placeholder">MEMBERS</span></div>
            </div>

            <div class="row-box standard l2">
                <div class="info-col">
                    <div class="level-header">
                        <span class="badge-lvl">L2</span>
                        <span class="role-name">JUNIOR</span>
                        <span class="tp-badge">TP: 50%</span>
                    </div>
                    <ul>
                        <li><strong>CONSTANCE:</strong> Humeur et performance stables.</li>
                        <li><strong>RESPECT:</strong> Toujours à l'heure. Pas d'excuses.</li>
                        <li><strong>RÈGLES:</strong> Suivre les recettes à 100%.</li>
                    </ul>
                </div>
                <div class="name-col"><span class="name-placeholder">MEMBERS</span></div>
            </div>

            <div class="row-box standard l1">
                <div class="info-col">
                    <div class="level-header">
                        <span class="badge-lvl">L1</span>
                        <span class="role-name">ÉQUIPIER</span>
                        <span class="tp-badge">TP: 30%</span>
                    </div>
                    <ul>
                        <li><strong>FIABILITÉ:</strong> Pas de retard. Pas d'absence.</li>
                        <li><strong>TÂCHES:</strong> Maîtrise Ouverture & Fermeture.</li>
                        <li><strong>ÉQUIPE:</strong> Voix forte, Communication claire.</li>
                    </ul>
                </div>
                <div class="name-col"><span class="name-placeholder">MEMBERS</span></div>
            </div>

            <div class="row-box standard commis">
                <div class="info-col">
                    <div class="level-header">
                        <span class="badge-lvl">N0</span>
                        <span class="role-name">COMMIS</span>
                    </div>
                    <ul>
                        <li><strong>INTÉGRATION:</strong> La première étape vers l'excellence.</li>
                        <li><strong>SÉCURITÉ:</strong> Hygiène (Mains) & Règles de base.</li>
                        <li><strong>BASES:</strong> Mémoriser le Menu & les Postes.</li>
                    </ul>
                </div>
                <div class="name-col"><span class="name-placeholder">MEMBERS</span></div>
            </div>

        </div>

        <footer>
            <div class="eval-note">ÉVALUATION À 360° ADOPTÉE</div>
            <div class="eval-sub">Révision des niveaux et des performances le 1er de chaque mois.</div>
        </footer>
    </div>

    <div class="no-print" style="position: fixed; bottom: 30px; right: 30px;">
        <button onclick="window.print()" class="btn btn-dark rounded-pill px-4 py-2 shadow fw-bold">
            🖨️ IMPRIMER
        </button>
    </div>

</body>

</html>
