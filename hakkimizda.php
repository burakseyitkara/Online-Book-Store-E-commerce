<?php
session_start();
require_once 'database.php';
include_once 'header.php';
?>


<div style=" background-image: linear-gradient(45deg, transparent 20%, black 25%, transparent 25%), 
                    linear-gradient(-45deg, transparent 20%, black 25%, transparent 25%), 
                    linear-gradient(-45deg, transparent 75%, black 80%, transparent 0),
                    radial-gradient(gray 2px, transparent 0);
            background-size: 30px 30px, 30px 30px; 
            height:400px;">

  <div class="container bg-secondary " style="height:400px;">
    <div class="row ">
      <div class="col-sm text-center " style="font-size:75px; margin-top: 120px;">
        Hakkımızda
      </div>
      <div class="col-sm text-left" style="margin-top: 120px;"> <i> İnsanı hiç yalnız bırakmayan kitaplar her zaman dostumuz olmuştur. Sizler için minimalist, estetik ve aradığınızı kolaylıkla bulabileceğiniz bir kitap satış sitesi sunmaya çalışıyoruz. Kitap okumayı seven, kitap okumak isteyen insanları teşvik etmek ve en önemlisi insanlara daha çok kitap ulaştırabilmeyi hedefliyoruz. </i>

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