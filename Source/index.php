<html>
    <head>
        <title>Homepage</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <link href="homepage.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div class="header">
            <div onclick="document.getElementById('#home').scrollIntoView({behavior: 'smooth'});" class="menu-link">Home</div>
            <div onclick="document.getElementById('#sorting').scrollIntoView({behavior: 'smooth'});" class="menu-link">Sorting</div>
            <div onclick="document.getElementById('#year2023').scrollIntoView({behavior: 'smooth'});" class="menu-link">Year 2023</div>
            <div onclick="document.getElementById('#year2022').scrollIntoView({behavior: 'smooth'});" class="menu-link">Year 2022</div>
            <a href="login.php" style="margin-top: auto; margin-bottom: auto; display: flex; margin-inline: auto; text-decoration: none;"><div class="login"><div class="login-text">Login</div></div></a>
        </div>
        <div id="#home" class="logo"></div>
        <div class="content" style="margin-bottom: 20px;">
            <div class="text-box">
                <div class="intro-text" style="margin-bottom: 20px;"> </div>
            </div>
            <div id="#sorting" class="sorting">
                <div class="separate-sort-box">
                    <div class="sort-text">Téma 1</div>
                </div>
                <div class="separate-sort-box">
                    <div class="sort-text">Téma 2</div>
                </div>
                <div class="separate-sort-box">
                    <div class="sort-text">Téma 3</div>
                </div>
                <div class="separate-sort-box">
                    <div class="sort-text">Téma 4</div>
                </div>
            </div>
            <div class="catalogs-all">
                <div id="#year2022" class="text-box">
                    <div class="intro-text">Rok 2023</div>
                    <div class="red-line"> </div>
                </div>
                <div class="catalogs-years">
                    <div style="margin-inline: auto;"><a href="generatePDF.php/?id=0"><div class="catalogs-separate"> </div></a></div>
                    <div style="margin-inline: auto;"><a href="generatePDF.php/?id=1"><div class="catalogs-separate"> </div></a></div>
                    <div style="margin-inline: auto;"><a href="generatePDF.php/?id=2"><div class="catalogs-separate"> </div></a></div>
                    <div style="margin-inline: auto;"><a href="generatePDF.php/?id=3"><div class="catalogs-separate"> </div></a></div>
                </div>
                <div id="#year2023" class="text-box">
                    <div class="intro-text">Rok 2022</div>
                    <div class="red-line"> </div>
                </div>
                <div class="catalogs-years">
                    <div style="margin-inline: auto;"><a href="generatePDF.php/?id=4"><div class="catalogs-separate"> </div></a></div>
                    <div style="margin-inline: auto;"><a href="generatePDF.php/?id=5"><div class="catalogs-separate"> </div></a></div>
                    <div style="margin-inline: auto;"><a href="generatePDF.php/?id=6"><div class="catalogs-separate"> </div></a></div>
                    <div style="margin-inline: auto;"><a href="generatePDF.php/?id=7"><div class="catalogs-separate"> </div></a></div>
                </div>
            </div>
        </div>
        <div class="footer"> </div>
    </body>
</html>