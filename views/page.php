<?php
return "
<!doctype>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width; initial-scale=1.0'>
        <title>$title</title>
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
        <link rel='stylesheet' href='css/style.css' type='text/css' media='screen'/>
        <script src='js/js.js'></script>
    </head>
    <body>
        <nav><div onclick='menu()' id='menu_click'>MENU</div><div id='navigation'>$navigation</div></nav>
        <div id='content'>
            $content
        </div>
    </body>
</html>";