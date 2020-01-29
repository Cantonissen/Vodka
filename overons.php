<html lang="en">
    <head>
        <title>Contact</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel= "stylesheet" type="text/css" href="styles/main.css">
        <script src="scripts/construct.js"></script>
    </head>
    <body>
        <nav></nav>
    <div id="main">
        <div id="sjoerd">
            <img src="res/sjoerd.jpeg" alt="Sjoerd" style="max-width: 200px"><br>
            Sjoerd Teijgeler.<br>
            17 Jarige student Applicatie Ontwikkeling<br>
        </div>

        <div id="collin">
            <img src="res/collin.jpg" alt="Collin" style="max-width: 200px"><br>
            Collin Antonissen.<br>
            22 Jarige student Applicatie Ontwikkeling<br>
        </div>
    </div>
    </body>
    <script>
        let nav = document.getElementsByTagName("nav")[0];
        if (typeof nav !== "undefined") {
            nav.innerHTML = getnav("res/contact-us-header.jpg");
        }
    </script>
</html>