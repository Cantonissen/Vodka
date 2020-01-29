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
        <div id="contactheader">
            <h1>Contact</h1>
        </div>
        <iframe id="adres" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2434.7908795350368!2d5.275353615770525!3d52.39234117979026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c617c1dcedf6af%3A0xb7e60f149191e0f!2sMBO%20College%20Almere%20-%20ROC%20van%20Flevoland!5e0!3m2!1snl!2snl!4v1575883442493!5m2!1snl!2snl" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        <div id="adresgegevens">
            <h3>Adresgegevens</h3>
            <p>Straat van Florida 1</p><br>
            <p>1334 PA Almere</p><br>
            <p>036 549 5900</p><br>
            <p>stegelier@roc-dev.com</p><br>
            <p>cantonissen@roc-dev.com</p><br>
            <a href="overons.php">Over ons!</a>
        </div>
        <div id="contact">
            Naam   ‌ ‌ ‌ ‌ ‌‌ ‌‌ <input type="text" name="Naam" placeholder="Naam"> <br>
            E-Mail ‌ ‌  ‌ ‌‌ ‌ <input type="text" name="E-Mail" placeholder="E-Mail"> <br>
            Telefoon  ‌ ‌ <input type="tel" name="Telefoon" placeholder="Tel.nr"> <br>
            Bericht  ‌ ‌ ‌‌‌‌‌‌ <textarea cols="30" rows="5" id="textareaContact"></textarea>
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