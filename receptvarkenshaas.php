<html lang="en">
    <head>
        <title>Contact</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel= "stylesheet" type="text/css" href="styles/main.css">
        <script src="scripts/construct.js"></script>
        <style>
        #nav a {
            color: #dcddde;
        }
        </style>
    </head>
    <body>
        <nav></nav>
        <div id="main">
            <div id="receptvarkenshaas">
                <h1>Italiaanse varkenshaas</h1>
                <h4>Recept</h4>
                Een perfect pronkstuk voor op tafel:
                gevulde varkenshaas met o.a. pesto, mozzarella en tomaatjes omwikkeld met licht knapperig gebakken parmaham
            </div>
            <div>
                <img src="res/varkenshaas3.jpg" class="varkenshaas3">
            </div>

            <div id="varkenshaasIngredienten">
                <h4>Ingredienten</h4>
                1 stuk varkenshaas (ca. 300 gr)<br>
                6 a 8 plakken parmaham<br>
                5 gedroogde tomaatjes<br>
                1 eetlepel pijnboompitten<br>
                1/2 bol mozzarella<br>
                1 eetlepel pesto<br>
                Paar blaadjes verse basilicum<br>
                olie of boter om te bakken<br>
            </div>

            <div id="bereidingVarkenshaas">
                <h4>Bereiding</h4>
                1. Snijd de varkenshaas over de lengte open maar niet helemaal doormidden.
                Besmeer de binnenzijde aan 1 kant met pesto. Snijd de mozzarella in plakken en leg op de onderste helft
                (gebruik niet al te veel mozzarella, want dan is de kans groter dat deze er uit loopt tijdens het bakken).<br>
                2. Snijd de tomaatjes in stukken, verdeel over de mozzarella en bestrooi met pijnboompitten en basilicumblaadjes.
                Vouw de varkenshaas voorzichtig dicht.<br>
                3. Wikkel de plakken ham om de varkenshaas en druk deze goed vast.
                Laat de plakken overlappen. Knoop er een paar touwtjes omheen zodat de parmaham goed blijft zitten.<br>
                4. Verhit een beetje olie of boter in een pan en leg de varkenshaas hierin. Bak de varkenshaas ca. 20 tot 25 minuten in de pan (afhankelijk van de dikte). Draai hem voorzichtig een paar keer om.
                Het vlees mag van binnen rosé zijn maar moet wel gaar zijn. Lekker met gebakken aardappeltjes, salade en/of wat pasta.<br>
            </div>

            <div id="varkenshaasimg">
                <img src="res/varkenshaasbereid1.jpg" class="varkenshaasbereiding">
                <img src="res/varkenshaasbereid2.jpg" class="varkenshaasbereiding">
                <img src="res/varkenshaasbereid3.jpg" class="varkenshaasbereiding">
            </div>
        </div>
    </body>
    <script>
        let nav = document.getElementsByTagName("nav")[0];
        if (typeof nav !== "undefined") {
            nav.innerHTML = getnav("res/receptbanner.jpg");
        }
    </script>
</html>