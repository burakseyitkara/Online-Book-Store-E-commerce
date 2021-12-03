<?php
session_start();
require_once 'database.php';
include_once 'header.php';


?>


<div style=" background-image: linear-gradient(45deg, transparent 20%, black 25%, transparent 25%), 
                    linear-gradient(-45deg, transparent 20%, black 25%, transparent 25%), 
                    linear-gradient(-45deg, transparent 75%, black 80%, transparent 0),
                    radial-gradient(gray 2px, transparent 0);
  background-size: 30px 30px, 30px 30px; height:500px;">

  <div class="container bg-secondary" style="height:500px;">
    <div class="row">
      <div class="col-sm text-center " style="font-size:75px; margin-top: 100px;">
        İletişim<br>
        Adreslerimiz
      </div>
      <div class="col-sm text-left" style="margin-top: 120px;">
        Koş Kitap<br><br>
        Adres: <i>Burak Seyit Kara Bilgisayar Mühendisliği Mühendislik Tasarımı</i> <br><br>
        Tel: <i>183301054</i> <br><br>
        Email: <i>183301054@ogr.selcuk.edu.tr </i>
      </div>

    </div>
  </div>


</div>



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