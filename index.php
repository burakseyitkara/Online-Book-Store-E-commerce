<?php
session_start();
require_once 'database.php';
include_once 'header.php';
?>

<!-- Slider,kampanyalar ve günün indirimli kitabı Kısmı -->
<div class="slider-area ">
  <div class="container p-2">

    <div class="row" >
      
      <div class="col-8" >
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" style="max-height: 350px;" src="img/kampanyalar1.png" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" style="max-height: 350px;" src="img/kampanyalar2.png" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" style="max-height: 350px;" src="img/kampanyalar3.png" alt="Third slide">
            </div>
          </div>
        </div>
      </div>

      <div class="col-4" style="margin: auto;">

        <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active bg-dark"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1" class="bg-dark"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2" class="bg-dark"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <a href="http://localhost/koskitap.com/product.php?ID=21"><img class="d-block ml-4" style="width:315px;height:300px;" src="img/vebageceleri.png" alt="First slide"> </a>
              
            </div>
            <div class="carousel-item">
              <a href="http://localhost/koskitap.com/product.php?ID=24"><img class="d-block ml-4" style="width:315px;height:300px;" src="img/mutluluğaövgü.png" alt="Second slide"> </a>
              
            </div>
            <div class="carousel-item">
              <a href="http://localhost/koskitap.com/product.php?ID=9">
              <img class="d-block ml-4" style="width:315px;height:300px;" src="img/tutunamayanlar.png" alt="Third slide"> </a>
              
            </div>
          </div>
          <a class="carousel-control-prev pl-3" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next pl-1" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

    </div>
    
  </div>
</div>

 <!-- ÇOK SATAN KİTAPLAR Kısmı -->
<div id="books" style="background:#efe5fe;">
  <h2 class="pt-4 pb-3" id="indexbanner"> ÇOK SATAN KİTAPLAR </h2>
  <div class="container pb-3 ">
    
    <div class="row ">
      <?php
      $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
      $query = $db->query("SELECT * FROM `books` WHERE bookId BETWEEN 1 AND 4");
      
      foreach ($query as $items) { ?>
      
      <div class="col-sm-3 " style="text-align: center;">
        <div class="card-deck " style="max-width:400px; float:left; ">
          <div class="card mt-3 mb-2 " style="height:450px; width:200px;">

            <a href="product.php?ID=<?php echo $items->bookId; ?>">
              <img class="card-img-top mt-2" style="width:150px; height:250px " src="<?php echo $items->bookImage; ?>" alt="Card image cap">
            </a>

            <div class="card-body">
              <div class="name">
                <a href="product.php?ID=<?php echo $items->bookId; ?>"> <?php echo $items->bookName; ?> </a>
              </div>

              <div class="author">
                <a href=""><?php echo $items->bookAuthor; ?></a>
              </div>
              <div class="publisher">
                <a href=""><?php echo $items->bookPublisher; ?></a>
              </div>

            </div>
            <div class="book-price">
              <div class="discount-badge">
                <small>%</small>
                <span>50</span>
              </div>
              <div class="price">
                <span class="old-price"><?php echo 2*$items->bookPrice; ?> TL</span>
                <span class="product-price"> <?php echo $items->bookPrice; ?> TL</span>
              </div>
            </div>
          </div>
        </div>
      </div> <?php  } ?>
    </div>
    



    <div id="tumunu-goruntule">
        <a href="http://localhost/koskitap.com/coksatanlar.php">
          <p >TÜMÜNÜ GÖRÜNTÜLE  <i class="fas fa-long-arrow-alt-right fa-lg"></i> </p>
        </a>
    </div>
  
  </div>
</div>
  
<!-- YENİ ÇIKAN KİTAPLAR Kısmı -->
<div id="books" style="background:#efe5fe;">

  <h2 class="pt-4 pb-3" id="indexbanner"> YENİ ÇIKAN KİTAPLAR </h2>
  <div class="container pb-3 ">
  
    <div class="row ">
      <?php
      $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
      $query = $db->query("SELECT * FROM `books` WHERE bookId BETWEEN 21 AND 24");
      
      foreach ($query as $items) { ?>
      
      <div class="col-sm-3 " style="text-align: center;">
        <div class="card-deck " style="max-width:400px; float:left; ">
          <div class="card mt-3 mb-2 " style="height:450px; width:200px;">

            <a href="product.php?ID=<?php echo $items->bookId; ?>">
              <img class="card-img-top mt-2" style="width:150px; height:250px " src="<?php echo $items->bookImage; ?>" alt="Card image cap">
            </a>

            <div class="card-body">
              <div class="name">
                <a href="product.php?ID=<?php echo $items->bookId; ?>"> <?php echo $items->bookName; ?> </a>
              </div>

              <div class="author">
                <a href=""><?php echo $items->bookAuthor; ?></a>
              </div>
              <div class="publisher">
                <a href=""><?php echo $items->bookPublisher; ?></a>
              </div>

            </div>
            <div class="book-price">

              <div class="discount-badge">
                <small>%</small>
                <span>50</span>
              </div>

              <div class="price">
                <span class="old-price"><?php echo 2*$items->bookPrice; ?> TL</span>
                <span class="product-price"> <?php echo $items->bookPrice; ?> TL</span>
              </div>

            </div>
          </div>
        </div>
      </div> <?php  } ?>
    </div>
  
  
    <div id="tumunu-goruntule">
        
        <a href="http://localhost/koskitap.com/yenicikanlar.php">
          <p >TÜMÜNÜ GÖRÜNTÜLE  <i class="fas fa-long-arrow-alt-right fa-lg"></i> </p>
        </a>
        
    </div>

  </div>
  

</div>

<!-- SİZİN İÇİN SEÇTİĞİMİZ KİTAPLAR Kısmı -->          
<div id="books" style="background:#efe5fe;">

  <h2 class="pt-4 pb-3" id="indexbanner"> SİZİN İÇİN SEÇTİĞİMİZ KİTAPLAR </h2>
  <div class="container pb-3 ">
  
    <div class="row ">
      <?php
      $ID=5;
      $ID2=23;
      $ID3=9;
      $ID4=3;
      $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
      $query = $db->query("SELECT * FROM `books` WHERE bookId IN(9,13,17,19)");
      
      foreach ($query as $items) { ?>
      
      <div class="col-sm-3 " style="text-align: center;">
        <div class="card-deck " style="max-width:400px; float:left; ">
          <div class="card mt-3 mb-2 " style="height:450px; width:200px;">

            <a href="product.php?ID=<?php echo $items->bookId; ?>">
              <img class="card-img-top mt-2" style="width:150px; height:250px " src="<?php echo $items->bookImage; ?>" alt="Card image cap">
            </a>

            <div class="card-body">
              <div class="name">
                <a href="product.php?ID=<?php echo $items->bookId; ?>"> <?php echo $items->bookName; ?> </a>
              </div>

              <div class="author">
                <a href=""><?php echo $items->bookAuthor; ?></a>
              </div>
              <div class="publisher">
                <a href=""><?php echo $items->bookPublisher; ?></a>
              </div>

            </div>
            <div class="book-price">

              <div class="discount-badge">
                <small>%</small>
                <span>50</span>
              </div>

              <div class="price">
                <span class="old-price"><?php echo 2*$items->bookPrice; ?> TL</span>
                <span class="product-price"> <?php echo $items->bookPrice; ?> TL</span>
              </div>

            </div>
          </div>
        </div>
      </div> <?php  } ?>
    </div>
  
  
    

  </div>
  

</div>

<!-- Footer Kısmı -->          
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
  
        
        




  


















