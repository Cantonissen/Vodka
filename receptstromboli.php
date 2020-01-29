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
            <div id="receptstromboli">
                <h1>Stromboli</h1>
                <h4>Recept</h4>
                Mooie gevlochten pizzarol gevuld met tomaat, mozzarella, olijven en spianata romana
            </div>

            <div id="stomboliFoto">
                <img src="res/stromboli2.jpg" class="stromboli2">
            </div>

            <div id="stromboliIngredienten">
                <h4>Ingrediënten</h4>
                1 pizzadeeg met tomatensaus<br>
                450 g diepvries spinazie (ontdooid)<br>
                200 g Hollandse gehaktballetjes<br>
                125 g mozzarella<br>
                2 tl gedroogde oregano<br>
            </div>

            <div id="bereidingStromboli">
                <h4>Bereiding</h4>
                1. Verwarm de oven voor op 160 °C. Rol het pizzadeeg uit op een met bakpapier beklede bakplaat en trek het aan alle kanten iets verder uit.
                Verdeel de tomatensaus uit de verpakking van het pizzadeeg erover.<br>
                2. Doe de spinazie in een vergiet en druk met de bolle kant van een lepel zo veel mogelijk vocht eruit. Verdeel de spinazie over het deeg.
                Snijd de gehaktballetjes en mozzarella in plakjes en verdeel over de spinazie. Bestrooi met de oregano.<br>
                3. Rol het deeg op, eventueel met behulp van het bakpapier, en leg de rol met de naad naar beneden op het bakpapier.
                Bak de stromboli in het midden van de oven in ca. 30 min. gaar. Giet na 20 min. het vrijgekomen vocht van de bakplaat,
                zodat ook de onderkant van de rol gaar en knapperig wordt. Serveer op een brood- of snijplank en snijd aan tafel in stukken.
            </div>

            <div id="bereidingimgstrom">
                <img src="res/strombolibereid1.jpg" class="strombolibereiding">
                <img src="res/strombolibereid2.jpg" class="strombolibereiding">
                <img src="res/strombolibereid4.jpg" class="strombolibereiding">
                <img src="res/strombolibereid3.jpg" class="strombolibereiding">
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