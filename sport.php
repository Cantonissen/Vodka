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
        <h1>Sport</h1>
        <div id="tripleimagecol">
            <img onclick="toggleover(0)" src="https://images.pexels.com/photos/235922/pexels-photo-235922.jpeg">
            <img onclick="toggleover(1)" src="https://images.pexels.com/photos/235922/pexels-photo-235922.jpeg">
            <img onclick="toggleover(2)" src="https://images.pexels.com/photos/235922/pexels-photo-235922.jpeg">
            <img onclick="toggleover(3)" src="https://images.pexels.com/photos/235922/pexels-photo-235922.jpeg">
            <img onclick="toggleover(4)" src="https://images.pexels.com/photos/235922/pexels-photo-235922.jpeg">
            <img onclick="toggleover(5)" src="https://images.pexels.com/photos/235922/pexels-photo-235922.jpeg">
            <img onclick="toggleover(6)" src="https://images.pexels.com/photos/235922/pexels-photo-235922.jpeg">
            <img onclick="toggleover(7)" src="https://images.pexels.com/photos/235922/pexels-photo-235922.jpeg">
            <img onclick="toggleover(8)" src="https://images.pexels.com/photos/235922/pexels-photo-235922.jpeg">
        </div>
        <div id="leftcol">
            <p>Etiam ullamcorper est turpis, porttitor molestie ex pulvinar eu.<br><br>Morbi rutrum, ipsum quis vehicula interdum, elit orci semper nunc, semper imperdiet odio magna nec libero.<br><br>Maecenas iaculis tristique ex ac tempus.<br><br>Sed vulputate neque venenatis est tempor dictum.<br><br>Duis hendrerit interdum est, ac faucibus risus condimentum quis.<br><br>us condimentum quis. us condimentum quis.<br><br>Duis vel augue quis sapien molestie viverra sed ut orci.</p>
        </div>
        <div id="lefttext">
            <b>Etiam ullamcorper est turpis, porttitor molestie ex pulvinar eu.</b>
            <br><br>
            <p>Etiam ullamcorper est turpis, porttitor molestie ex pulvinar eu. Morbi rutrum, ipsum quis vehicula interdum, elit orci semper nunc, semper imperdiet odio magna nec libero. Maecenas iaculis tristique ex ac tempus. Sed vulputate neque venenatis est tempor dictum. Duis hendrerit interdum est, ac faucibus risus condimentum quis. us condimentum quis. us condimentum quis. Duis vel augue quis sapien molestie viverra sed ut orci.</p>
        </div>
        <div id="righttext">
            <b>Etiam ullamcorper est turpis, porttitor molestie ex pulvinar eu.</b>
            <br><br>
            <p>Etiam ullamcorper est turpis, porttitor molestie ex pulvinar eu. Morbi rutrum, ipsum quis vehicula interdum, elit orci semper nunc, semper imperdiet odio magna nec libero. Maecenas iaculis tristique ex ac tempus. Sed vulputate neque venenatis est tempor dictum. Duis hendrerit interdum est, ac faucibus risus condimentum quis. us condimentum quis. us condimentum quis. Duis vel augue quis sapien molestie viverra sed ut orci.</p>
        </div>
    </div>
    </body>
    <script>
        let nav = document.getElementsByTagName("nav")[0];
        if (typeof nav !== "undefined") {
            nav.innerHTML = getnav("https://png.pngtree.com/thumb_back/fw800/back_our/20190619/ourmid/pngtree-red-running-sport-background-banner-image_139653.jpg");
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