<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bistro Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
:root {
    --deep-blue: #1a2c42;
    --accent-blue: #2c4a6d;
    --soft-gray: #8e9396;
    --light-gray: #f4f5f6;
    --warm-white: #fcfcfa;
    --menu-gray: #F5F5F3;
    --text-dark: #2C2C2C;
    --text-gray: #757575;
}

body {
    background: var(--warm-white);
    font-family: "Helvetica Neue", Arial, sans-serif;
    padding: 2rem;
    margin: 0;
}

.menu-container {
    width: 176mm;
    height: 250mm;
    background: white;
    padding: 15mm;
    margin: 0 auto;
    position: relative;
    overflow: hidden;
    box-shadow: 0 0 30px rgba(0,0,0,0.03);
}

.menu-container::before {
    content: '';
    position: absolute;
    top: -100%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: repeating-linear-gradient(
        45deg,
        var(--light-gray) 0,
        var(--light-gray) 1px,
        transparent 1px,
        transparent 30px
    );
    opacity: 0.3;
    z-index: 0;
}

.menu-content {
    position: relative;
    z-index: 1;
    height: 100%;
}

.menu-header {
    margin-bottom: 2.5rem;
    position: relative;
}

.menu-header::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -15px;
    width: 30px;
    height: 2px;
    background: var(--deep-blue);
}

.menu-title {
    font-size: 0.9rem;
    letter-spacing: 0.2em;
    color: var(--deep-blue);
    font-weight: 400;
    margin: 0;
}

.menu-subtitle {
    font-size: 0.7rem;
    color: var(--soft-gray);
    margin-top: 0.4rem;
    letter-spacing: 0.1em;
}

.drinks-section {
    height: 45%;
    margin-bottom: 2rem;
}

.image-wrapper {
    position: relative;
    overflow: hidden;
    margin-bottom: 1rem;
    background: var(--light-gray);
    transition: transform 0.3s ease;
}

.image-wrapper::before {
    content: '';
    display: block;
    padding-top: 100%;
}

.image-wrapper:hover {
    transform: translateY(-3px);
}

.image-wrapper::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(
        45deg,
        rgba(26, 44, 66, 0.1),
        transparent
    );
}

.image-wrapper img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.menu-item {
    margin-bottom: 1.5rem;
}

.item-info {
    margin-top: 1rem;
    position: relative;
    padding-left: 1rem;
}

.item-info::before {
    content: '';
    position: absolute;
    left: 0;
    top: 5px;
    width: 1px;
    height: calc(100% - 10px);
    background: var(--accent-blue);
    opacity: 0.3;
}

/* Special Section スタイル */
.special-section {
    background: var(--menu-gray);
    padding: 2rem;
    height: 40%;
    margin-top: auto;
    display: flex;
    position: relative;
    border: 1px solid rgba(0, 0, 0, 0.05);
}

.special-image {
    width: 45%;
    height: 100%;
    position: relative;
    overflow: hidden;
}

.special-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: brightness(1.05);
}

.special-content {
    width: 55%;
    padding-left: 2.5rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
    color: var(--text-dark);
}

.special-title {
    font-size: 0.7rem;
    letter-spacing: 0.25em;
    margin-bottom: 1.2rem;
    position: relative;
    opacity: 0.8;
}

.special-title::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -0.5rem;
    width: 20px;
    height: 1px;
    background: var(--text-gray);
    opacity: 0.3;
}

.special-content .item-title {
    font-size: 1.1rem;
    letter-spacing: 0.15em;
    margin-bottom: 0.4rem;
    font-weight: 300;
}

.special-content .item-jp {
    font-size: 0.6rem;
    color: var(--text-gray);
    margin-bottom: 0.8rem;
    letter-spacing: 0.08em;
}

.special-content .description,
.special-content .noodle-options {
    font-size: 0.65rem;
    color: var(--text-gray);
    line-height: 1.8;
    opacity: 0.9;
}

.season-tag {
    position: absolute;
    bottom: 15mm;
    right: 15mm;
    font-size: 0.65rem;
    color: var(--soft-gray);
    letter-spacing: 0.2em;
    transform: rotate(-90deg);
    transform-origin: right;
}

.print-button {
    position: fixed;
    top: 20px;
    right: 20px;
    background: var(--deep-blue);
    color: white;
    border: none;
    padding: 8px 16px;
    font-size: 0.7rem;
    letter-spacing: 0.1em;
    cursor: pointer;
    z-index: 1000;
    transition: background 0.3s ease;
}

.print-button:hover {
    background: var(--accent-blue);
}

hr {
    margin: 1rem 0;
    border: 0;
    border-top: 1px solid rgba(0, 0, 0, 0.05);
}

@media print {
    @page {
        size: B5 portrait;
        margin: 0;
    }
    body {
        width: 176mm;
        height: 250mm;
        margin: 0;
        padding: 0;
    }
    .menu-container {
        box-shadow: none;
        width: 176mm !important;
        height: 250mm !important;
        margin: 0 !important;
        padding: 15mm !important;
    }
    .no-print {
        display: none !important;
    }
}
    </style>
</head>
<body>
    <button class="print-button no-print" onclick="window.print()">Print Menu</button>

    <div class="menu-container">
        <div class="menu-content">
            <div class="special-section">
                    <div class="special-image">
                        <img src="{{ asset('images/canard.png') }}" alt="Special" loading="lazy">
                    </div>
                    <div class="special-content">
                <div class="special-title">CHEF'S SPECIAL</div>
                    <div class="item-title">Duck Noodle Selection 36dt</div>
                    <div class="item-jp">鴨肉の本日のおすすめ</div>
                    <p class="description mt-3 mb-4">                            
                        Rich duck broth infused noodles.<br>
                        Choose your style:
                    </p>
                    <div class="noodle-options">
                        Udon in duck broth <br>
                        Ramen in duck broth
                    </div>
                </div>
            </div>

<hr>

            <div class="special-section">
                <div class="special-image">
                    <img src="{{ asset('images/canard.png') }}" alt="Special" loading="lazy">
                </div>
                <div class="special-content">
                <div class="special-title">CHEF'S SPECIAL</div>
                    <div class="item-title">Duck Noodle Selection 36dt</div>
                    <div class="item-jp">鴨肉の本日のおすすめ</div>
                    <p class="description mt-3 mb-4">                            
                        Rich duck broth infused noodles.<br>
                        Choose your style:
                    </p>
                    <div class="noodle-options">
                        Udon in duck broth <br>
                        Ramen in duck broth
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
