<html lang="en">
    <head>
        <title>Index</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="styles/main.css">
        <script src="scripts/construct.js"></script>
    </head>
    <body>
        <nav></nav>
        <div id="main">
            <div id="articles">
                <h1>Nieuws uit Almere Buiten</h1>
                <script>document.write(news1())</script>
                <hr>
                <script>document.write(news2())</script>
                <hr>
                <h1>Stagelopen in Almere</h1>
                <script>document.write(fac())</script>
            </div>
        </div>
    </body>
    <script>
        let nav = document.getElementsByTagName("nav")[0];
        if (typeof nav !== "undefined") {
            nav.innerHTML = getnav("res/banner.jpg");
        }
    </script>
</html>