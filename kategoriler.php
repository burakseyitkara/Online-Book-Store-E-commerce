<?php
session_start();
require_once 'database.php';
include_once 'header.php';
?>
<style>
    h2 {
        font-family: 'Dancing Script', cursive; 
        
        font-size: 50px;
        margin: 0;
        padding: 0;
    }

    .container ul {
        
        margin: 0;
        padding: 0;
    }

    .container li {
        font-size: 20px;
        border-bottom: 3px solid #ccc;
        
    }

    li:last-child {
        border: none;
    }

    .container li a {
        text-decoration: none;
        color: #000;

        -webkit-transition: font-size 0.3s ease, background-color 0.3s ease;
        -moz-transition: font-size 0.3s ease, background-color 0.3s ease;
        -o-transition: font-size 0.3s ease, background-color 0.3s ease;
        -ms-transition: font-size 0.3s ease, background-color 0.3s ease;
        transition: font-size 0.3s ease, background-color 0.3s ease;
        display: block;
        width: 200px;
    }

    .container li a:hover {
        font-size: 25px;
        text-decoration: none;
        color: black;
        
    }
</style>
<main style="height: 500px;">
    <div class="container">
        <div class="container pt-5">
            <div class="row">
                <div class="col-sm text-justify">
                    <h2><i class="fas fa-feather-alt fa-sm"> </i> Edebiyat </h2>
                    <br><br>
                    <ul>
                        <li><a href="#">Roman</a></li>
                        <li><a href="#">Dünya Klasikleri</a></li>
                        <li><a href="#">Türk Edebiyatı</a></li>
                        <li><a href="#">Şiir</a></li>
                        <li><a href="#">Biyografi & Otobiyografi</a></li>
                    </ul>
                </div>
                <div class="col-sm text-justify">
                    <h2>Diğer Kategoriler</h2>
                    <br><br>
                    <ul>
                        <li><a href="#">Kültür</a></li>
                        <li><a href="#">Çocuk Kitapları</a></li>
                        <li><a href="#">Din Tasavvuf</a></li>
                        <li><a href="#">Bilim Kurgu</a></li>
                        <li><a href="#">Felsefe-Düşünce</a></li>
                        <li><a href="#">Araştırma-Tarih</a></li>
                        <li><a href="#">Bilim</a></li>
                        <li><a href="#">Çizgi Roman</a></li>
                        <li><a href="#">Mitoloji Efsane</a></li>
                        <li><a href="#">Sanat-Tasarım</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</main>







<div class="footer-basic">
    <footer>
        <div class="social"><a href="#"><i class="fab fa-instagram fa-1x"></i></a><a href="#"><i class="fab fa-facebook-f fa-1x"></i></a><a href="#"><i class="fab fa-twitter fa-1x"></i></a></div>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="http://localhost/koskitap.com/index.php">Anasayfa</a></li>
            <li class="list-inline-item"><a href="http://localhost/koskitap.com/hakkimizda.php">Hakkımızda</a></li>
            <li class="list-inline-item"><a href="http://localhost/koskitap.com/iletisim.php">İletişim</a></li>
        </ul>
        <p class="copyright">Koş Kitap © 2021</p>
    </footer>
</div>

<script src="js/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/81720d9798.js" crossorigin="anonymous"></script>

</body>

</html>