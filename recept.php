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
            <h1> Recepten </h1>
            <div id="stromboli">
                <a href="receptstromboli.php">
                <h4>Stromboli</h4>
                </a>
                Stromboli is – naast een Italiaans vulkaaneiland voor de kust van Sicilië – een verdomd lekkere Italiaanse snack.
                Houd je van pizza, reken dan maar dat stromboli je nieuwe liefde wordt. Dit gevulde brood is namelijk goddelijk.
                Sommige mensen noemen het een opgerolde pizza en dat snappen we: aan de binnenkant zie je allemaal losse laagjes.
                Alsof je letterlijk een pizza hebt opgerold. Toch is stromboli van de buitenkant ontegenzeggelijk een brood. Daarmee lijkt het ook wel weer wat op een calzone.
            </div>
            <div id="receptfotos">
                <a href="receptstromboli.php">
                    <img src="res/stromboli1.jpg" class="stromboli1">
                    <img src="res/stromboli3.jpg" class="stromboli2">
                </a>
                <a href="receptvarkenshaas.php">
                    <img src="res/varkenshaas.jpg" class="varkenshaas1">
                    <img src="res/varkenshaas2.jpg" class="varkenshaas2">
                </a>
                <a href="recepttiramisu.php">
                    <img src="res/tiramisu3.jpg" class="tiramisu1">
                    <img src="res/tiramisu2.jpg" class="tiramisu2">
                </a>
            </div>
            
            <div id="varkenshaas">
                <a href="receptvarkenshaas.php">
                <h4>Italiaanse varkenshaas</h4>
                </a>
                Een perfect pronkstuk voor op tafel:
                gevulde varkenshaas met o.a. pesto, mozzarella en tomaatjes omwikkeld met licht knapperig gebakken parmaham
            </div>

            <div id="tiramisu">
                <a href="recepttiramisu.php">
                <h4>Feestelijke bosvruchten tiramisu</h4>
                </a>
                Tiramisu is een populair toetje dat altijd wel in de smaak valt.
                En ook met Kerst is tiramisu ideaal om te maken omdat je het al een dag van tevoren kan/moet bereiden.
                En speciaal voor de feestdagen maakte ik een extra feestelijke variant met de Bosvruchtenjam van Hero.
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
