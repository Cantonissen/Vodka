<html lang="en">
    <head>
        <title>Index</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="styles/main.css">
        <script src="scripts/construct.js"></script>
        <style>
            #nav a {
                color: #dcddde;
            }
        </style>
    </head>
    <body>
    <nav></nav>
    <div id="overlay" style='width: 0%'></div>
    <div id="main">
        <h1>Concert van Bløf</h1>
        <div id="imagerow">
            <img onclick="toggleover(0)" src="res/concert.jpg">
            <img onclick="toggleover(1)" src="res/concert2.png">
        </div>
        <div id="midrow">
            <p>Etiam ullamcorper est turpis, porttitor molestie ex pulvinar eu. Morbi rutrum, ipsum quis vehicula interdum, elit orci semper nunc, semper imperdiet odio magna nec libero. Maecenas iaculis tristique ex ac tempus. Sed vulputate neque venenatis est tempor dictum. Duis hendrerit interdum est, ac faucibus risus condimentum quis. us condimentum quis. us condimentum quis. Duis vel augue quis sapien molestie viverra sed ut orci.</p>
        </div>
        <div id="outerrow">
            <div id="toprow">
                <p>Nunc ac turpis imperdiet, blandit purus quis, efficitur magna. Etiam id sapien placerat, porta turpis quis, consectetur neque. Vivamus id sem pellentesque, maximus ex in, aliquam lorem. Nunc ac turpis imperdiet, blandit purus quis, efficitur magna. Etiam id sapien placerat, porta turpis quis, consectetur neque. Vivamus id sem pellentesque, maximus ex in, aliquam lorem.</p>
            </div>
            <img onclick="toggleover(2)" id="bottomrow" src="https://www.snollebollekesliveinconcert.nl/wp-content/uploads/Header-Snollebollekes-Live-in-Concert-5-3.jpg">
        </div>
        <div id="bottom">
            <h2>En meer...</h2>
            <img onclick="toggleover(3)" src="https://www.newyork.nl/wp-content/uploads/2015/01/Concertagenda-New-York-300x226.png">
            <img onclick="toggleover(4)" src="https://www.newyork.nl/wp-content/uploads/2015/01/Concertagenda-New-York-300x226.png">
            <img onclick="toggleover(5)" src="https://www.newyork.nl/wp-content/uploads/2015/01/Concertagenda-New-York-300x226.png">
        </div>
    </div>
    </body>
    <script>
        let nav = document.getElementsByTagName("nav")[0];
        if (typeof nav !== "undefined") {
            nav.innerHTML = getnav("res/bannercon.jpg");
        }
        
        let temptext = "Etiam ullamcorper est turpis, porttitor molestie ex pulvinar eu. Morbi rutrum, ipsum quis vehicula interdum, elit orci semper nunc, semper imperdiet odio magna nec libero. Maecenas iaculis tristique ex ac tempus. Sed vulputate neque venenatis est tempor dictum. Duis hendrerit interdum est, ac faucibus risus condimentum quis. us condimentum quis. us condimentum quis. Duis vel augue quis sapien molestie viverra sed ut orci.";
        
        let close = "<div id='close' onclick='toggleover(\"close\")'>✕</div>";
        
        let text = [temptext + "<img src='res/concert.jpg'>"];
        
        text[1] = temptext + "<img src='res/concert2.png'>";
        text[2] = temptext + "<img src='https://www.snollebollekesliveinconcert.nl/wp-content/uploads/Header-Snollebollekes-Live-in-Concert-5-3.jpg'>";
        text[3] = temptext + "<img src='https://www.newyork.nl/wp-content/uploads/2015/01/Concertagenda-New-York-300x226.png'>";
        // this is just because I am gonna use the same text for all of them
        text[4] = text[3];
        text[5] = text[3];
        
        
        function toggleover(info) {
            let overlay = document.getElementById("overlay");
            if (info == "close") {
                overlay.innerHTML = "";
                overlay.style.width = "0";
                overlay.style.border = "none";
                overlay.style.padding = "0";
            } else {
                if (typeof text[info] !== "undefined") {
                    overlay.innerHTML = close + text[info];
                    overlay.style.width = "90%";
                    overlay.style.border = "3px solid #202225";
                    overlay.style.padding = "100px";
                } else {
                    throw "info index doesn't exist";
                }
            }
        }
    </script>
</html>