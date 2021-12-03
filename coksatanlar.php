<?php
session_start();
require_once 'database.php';
include_once 'header.php';
?>

<main id="books" style="height: auto;">
  <div class="container"> <br>
    <h2 class="pt-4 pb-3" style="font-family: 'Special Elite', cursive;
                        color:white;
                        text-align:center;
                        background:#6965a6;
                        font-size:45px;
                        font-weight:bold;
                        text-shadow: 2px 2px black;
                        letter-spacing: 7px;"> ÇOK SATAN KİTAPLAR </h2>
   


    <div style="float: left; margin-left:18px;">
      <button disabled style="background:#efefef;color:#000000;">Fiyata Göre Sırala</button>
      <a href="siralama.php?sort=azalan-cs">
        <button> <i class="fas fa-sort-amount-down-alt"></i> </button>
      </a>
      <a href="siralama.php?sort=artan-cs">
        <button> <i class="fas fa-sort-amount-up-alt"></i></button>
      </a>
    </div>

    <div style="float: right; margin-right:63px;">
      <button disabled style="background:#efefef;color:#000000;">Alfabetik Sırala</button>
      <a href="siralama.php?sort=az-cs">
        <button><i class="fas fa-sort-alpha-down"></i></button>
      </a>
      <a href="siralama.php?sort=za-cs">
        <button><i class="fas fa-sort-alpha-up"></i></button>
      </a>
    </div><br><br>

    <div class="container ">
      <div class="row">
        <?php

        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        $query = $db->query("SELECT * FROM `books` WHERE bookId <= 20");
        //$result = $query->fetch(PDO::FETCH_OBJ);

        foreach ($query as $items) {

        ?>
          <div class="col-sm-3">
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
                    <span class="old-price"><?php echo 2 * $items->bookPrice; ?> TL</span>
                    <span class="product-price"> <?php echo $items->bookPrice; ?> TL</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php  } ?>
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
<script>


</script>



</body>

</html>



