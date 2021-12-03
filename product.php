<?php
session_start();
require_once 'database.php';
include_once 'header.php';

$ID = $_GET['ID'];
$book = $db->query("SELECT * FROM books WHERE bookId = $ID ");
$book = $book->fetch(PDO::FETCH_OBJ);
?>

<main class="p-5" style="height: auto;background:#6d6875;">
  <div class="container" style="background-color: #e5989b;">

    <div class="row">
      <div class="col-4 pt-5" id="image-area">
        <img style="width: 320px; height:500px;box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;" src="<?php echo $book->bookImage; ?>" alt="">
      </div>
      <div class="col-8 pb-5 pt-4">
          <h1 class="text-center p-2" style="border: solid;background:#edf6f9"> <?php echo $book->bookName; ?> </h2>
          <div class="row ml-1">
            <div class="col-6 mt-5 pt-4 " id="product-border" style="background-color: #ffcdb2;height:auto">
              <p><b>Yazar :</b> <i> <?php echo $book->bookAuthor; ?> </i> </p>
              <p><b>Yayınevi :</b><i> <?php echo $book->bookPublisher; ?></i></p>
              <p><b>Kitap Türü :</b> <i> <?php echo $book->bookType; ?></i></p>
              <p><b> Sayfa Sayısı :</b><i> <?php echo $book->bookPage; ?> </i></p>
            </div>
            <div class="col-6 mt-5 mb-5">
              <div class="container pt-2 " id="sketchy">
                <h4>Fiyat</h4>
                <p style="font-size: 25px;margin-bottom:1px;"> <span style="text-decoration: line-through;">
                    <?php echo 2 * $book->bookPrice;
                    ?>TL</span>
                  <?php echo $book->bookPrice; ?>TL </p>
                <p class="bg-info text-light" style="margin: 0px;font-family: 'Just Another Hand', cursive;font-size: 25px;">%50 indirim!</p>
                <div class="mt-3 mb-3">
                  <button class="btn-dark btn-sm">
                    <i class="fas fa-cart-arrow-down fa-sm"></i> Sepete Ekle</button>
                  <button class="btn-danger btn-sm">
                    <i class="fas fa-lira-sign fa-sm"></i> Hemen Satın Al</button>
                </div>
              </div>
            </div>
          </div><br>
          <div id="desc-border" style="background:#eddcd2">
            <p><b>Açıklama :</b> <i> <?php echo $book->bookDescription; ?> </i></p>
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

















