<html>
    <head>
        <title>| Homepage</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <link href="homepage.css" type="text/css" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="../Source/images/fav.png" class="fav">
    </head>
    <body>
        <div class="header">
            <div onclick="document.querySelector('#home').scrollIntoView({behavior: 'smooth'});" class="menu-link">Home</div>
            <div onclick="document.querySelector('#sorting').scrollIntoView({behavior: 'smooth'});" class="menu-link">Sorting</div>
            <div onclick="document.querySelector('#year2023').scrollIntoView({behavior: 'smooth'});" class="menu-link">Year 2023</div>
            <div onclick="document.querySelector('#year2022').scrollIntoView({behavior: 'smooth'});" class="menu-link">Year 2022</div>
            <div class="form-group search-box">
                <input type="text" class="input" placeholder="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
            <a href="login.php" style="margin-top: auto; margin-bottom: auto; display: flex; margin-inline: auto;"><div class="login"><div class="login-text">Login</div></div></a>
        </div>
        <div id="#home" class="logo"><img></div>
        <div class="content">
             <div class="text-box">
                <div class="intro-text"> </div>
                <div class="red-line"> </div>
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
                    <div class="catalogs-separate"> </div>
                    <div class="catalogs-separate"> </div>
                    <div class="catalogs-separate"> </div>
                    <div class="catalogs-separate"> </div>
                </div>
                <div id="#year2023" class="text-box">
                    <div class="intro-text">Rok 2022</div>
                    <div class="red-line"> </div>
                </div>
                <div class="catalogs-years">
                    <div class="catalogs-separate"> </div>
                    <div class="catalogs-separate"> </div>
                    <div class="catalogs-separate"> </div>
                    <div class="catalogs-separate"> </div>
                </div>
            </div>
        </div>
        <div class="footer"> </div>
    </body>
</html>