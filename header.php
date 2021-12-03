<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Hello, world!</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/81720d9798.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Vollkorn:ital,wght@1,600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Just+Another+Hand&display=swap" rel="stylesheet">


</head>

<body>

    <header>

        <div class="top-header">
            <div class="container">
                <nav class="navbar navbar-light" style="background-color: #ffff;">
                    
                    <a class="navbar-brand" href="http://localhost/koskitap.com/index.php">
                        Koş Kitap..
                    </a>

                    <form class="search mb-1" style="margin-left:100px" action="arama.php" method="get">

                        <input type="text" name="kelime" placeholder=" Kitap adı ara!" />
                        <button type="submit" class="searchButton"> <i class="fa fa-search fa-1x "></i> </button>
                    
                    </form>

                    <?php
                    if (isset($_SESSION['user_login'])) {
                        echo '<a class="coolBeans" id="logout-bean" href="http://localhost/koskitap.com/logout.php">Çıkış Yap</a>';
                    } else {
                        echo '<a class="coolBeans mb-1" href="http://localhost/koskitap.com/login.php">Giriş Yap</a>';
                    }
                    ?>
                </nav>
            </div>
        </div>

        <div class="bottom-header">
            <div class="svg-wrapper">
                <svg height="40" width="150">
                    <rect id="shape" height="40" width="150" />
                    <div id="text">
                        <a href="http://localhost/koskitap.com/index.php"><span class="spot"></span>ANASAYFA</a>
                    </div>
                </svg>
            </div>
            <div class="svg-wrapper">
                <svg height="40" width="150">
                    <rect id="shape" height="40" width="150" />
                    <div id="text">
                        <a href="http://localhost/koskitap.com/kategoriler.php"><span class="spot"></span>KATEGORİLER</a>
                    </div>
                </svg>
            </div>
            <div class="svg-wrapper">
                <svg height="40" width="150">
                    <rect id="shape" height="40" width="150" />
                    <div id="text">
                        <a href="http://localhost/koskitap.com/coksatanlar.php"><span class="spot"></span>ÇOK SATANLAR</a>
                    </div>
                </svg>
            </div>
            <div class="svg-wrapper">
                <svg height="40" width="150">
                    <rect id="shape" height="40" width="150" />
                    <div id="text">
                        <a href="http://localhost/koskitap.com/yenicikanlar.php"><span class="spot"></span>YENİ ÇIKANLAR</a>
                    </div>
                </svg>
            </div>
            <div class="svg-wrapper">
                <svg height="40" width="150">
                    <rect id="shape" height="40" width="150" />
                    <div id="text">
                        <a href="http://localhost/koskitap.com/iletisim.php"><span class="spot"></span>İLETİŞİM</a>
                    </div>
                </svg>
            </div>
        </div>

    </header>










