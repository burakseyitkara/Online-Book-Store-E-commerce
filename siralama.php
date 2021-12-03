<?php
session_start();
require_once 'database.php';
include_once 'header.php';
?>

<?php

$sort = $_GET['sort'];

    if ($sort == "azalan-cs") {
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        $query = $db->query("SELECT * FROM `books` WHERE bookId <= 20 ORDER BY `books`.`bookPrice` DESC");
    } else if ($sort == "artan-cs") {
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        $query = $db->query("SELECT * FROM `books` WHERE bookId <= 20 ORDER BY `books`.`bookPrice` ASC");
    } else if ($sort == "az-cs") {
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        $query = $db->query("SELECT * FROM `books` WHERE bookId <= 20 ORDER BY `books`.`bookName` ASC");
    } else if ($sort == "za-cs") {
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        $query = $db->query("SELECT * FROM `books` WHERE bookId <= 20 ORDER BY `books`.`bookName` DESC");
    } else if ($sort == "azalan-yc") {
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        $query = $db->query("SELECT * FROM `books` WHERE bookId BETWEEN 21 AND 30 ORDER BY `books`.`bookPrice` DESC");
    } else if ($sort == "artan-yc") {
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        $query = $db->query("SELECT * FROM `books` WHERE bookId BETWEEN 21 AND 30 ORDER BY `books`.`bookPrice` ASC");
    } else if ($sort == "az-yc") {
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        $query = $db->query("SELECT * FROM `books` WHERE bookId BETWEEN 21 AND 30 ORDER BY `books`.`bookName` ASC");
    } else if ($sort == "za-yc") {
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        $query = $db->query("SELECT * FROM `books` WHERE bookId BETWEEN 21 AND 30 ORDER BY `books`.`bookName` DESC");
    }

?>



<main id="books" style="height: auto;">
    <div class="container"><br>
        <h2>
            <?php
            switch ($sort) 
            {
                case "azalan-cs":
                    echo "Çok satan kitaplar";
                    $sort = "artan-cs";
                    $sort2 = "az-cs";
                    break;
                case "artan-cs":
                    echo "Çok satan kitaplar";
                    $sort = "azalan-cs";
                    $sort2 = "az-cs";
                    break;
                case "az-cs":
                    echo "Çok satan kitaplar";
                    $sort = "azalan-cs";
                    $sort2 = "za-cs";
                    break;
                case "za-cs":
                    echo "Çok satan kitaplar";
                    $sort = "artan-cs";
                    $sort2 = "az-cs";
                    break;

                case "azalan-yc":
                    echo "Yeni çıkan kitaplar";
                    $sort = "artan-yc";
                    $sort2 = "az-yc";
                    break;
                case "artan-yc":
                    echo "Yeni çıkan kitaplar";
                    $sort = "azalanyc";
                    $sort2 = "az-yc";
                    break;
                case "az-yc":
                    echo "Yeni çıkan kitaplar";
                    $sort = "azalan-yc";
                    $sort2 = "za-yc";
                    break;
                case "za-yc":
                    echo "Yeni çıkan kitaplar";
                    $sort = "artan-yc";
                    $sort2 = "az-yc";
                    break;
            } ?>
        </h2>  
        <div style="float: left; margin-left:18px;">
            <button disabled style="background:#efefef;color:#000000;">Fiyata Göre Sırala</button>

            <a href="siralama.php?sort=<?php echo $sort ?>">
                <button> <i class="fas fa-sort-amount-down-alt"></i></button>
            </a>

            <a href="siralama.php?sort=<?php echo $sort ?>">
                <button> <i class="fas fa-sort-amount-up-alt"></i></button>
            </a>
        </div>

        <div style="float: right; margin-right:63px;">
            <button disabled style="background:#efefef;color:#000000;">Alfabetik Sırala</button>
            
            <a href="siralama.php?sort=<?php echo $sort2 ?>">
                <button> <i class="fas fa-sort-alpha-down"></i> </button> 
            </a>
            
            <a href="siralama.php?sort=<?php echo $sort2 ?>">
                <button><i class="fas fa-sort-alpha-up"></i> </button> 
            </a>
        </div><br><br>  
              
        <div class="container">
            <div class="row">
                <?php
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
                                        <span class="old-price"><?php echo 2*$items->bookPrice; ?> TL</span>
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

</body>

</html>


            
        

      


