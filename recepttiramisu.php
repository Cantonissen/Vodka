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
            <div id="recepttiramisu">
                <h1>Tiramisu</h1>
                <h4>Recept</h4>
                Tiramisu is een populair toetje dat altijd wel in de smaak valt. En ook met Kerst is tiramisu ideaal om te maken omdat je het al een dag van tevoren kan/moet bereiden.
                En speciaal voor de feestdagen maakte ik een extra feestelijke variant met de Bosvruchtenjam van Hero.
            </div>

            <div>
                <img src="res/tiramisu4.jpg" class="tiramisu3">
            </div>

            <div id="tiramisuIngredienten">
                <h4>Ingredienten</h4>
                ½ pot Hero Bosvruchtenjam<br>
                500 ml mascarpone<br>
                125 ml slagroom<br>
                4 eieren<br>
                50 gr suiker<br>
                1 pak lange vingers<br>
                Scheutje Limoncello<br>
                Garnering: geraspte witte chocolade, frambozen, blauwe bessen, aalbessen, poedersuiker<br>
            </div>

            <div id="bereidingTiramisu">
                1. Splits de eieren (het eiwit heb je niet meer nodig maar je kunt er b.v. lekkere schuimpjes of pavlova van maken).
                Mix de eidooiers met de suiker 3 minuutjes tot er een licht geel mengsel is ontstaan.
                Voeg de mascarpone beetje bij beetje toe tot deze is opgenomen en er geen klontjes meer in zitten.<br>
                2. Mix in een andere kom de slagroom stijf. Spatel de slagroom vervolgens door het mascarpone mengsel tot ook deze is opgenomen.
                Verdeel een laag lange vingers over de bodem van de schaal. Besprenkel een beetje met Limoncello.
                Besmeer de lange vingers met een laag bosvruchtenjam. Giet het roommengsel voor de helft er over.<br>
                3. Leg hier vervolgens weer een laag lange vingers op. Besprenkel met Limoncello, besmeer met bosvruchtenjam en dek af met de rest van de room.
                Garneer de bovenzijde met wat fruit en zet de tiramisu een hele nacht in de koelkast.
                Doe er voor het serveren eventueel nog wat poedersuiker en/of witte chocolade schaafsel op.
            </div>

            <div id="tiramisuimg">
                <img src="res/tiramisubereid1.jpg" class="tiramisubereiding">
                <img src="res/tiramisubereid2.jpg" class="tiramisubereiding">
                <img src="res/tiramisubereid3.jpg" class="tiramisubereiding">
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