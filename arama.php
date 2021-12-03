<?php
session_start();
require_once 'database.php';
include_once 'header.php';
?>

<main id="books">
    <?php
    if ($_GET) {
        $kelime = $_GET['kelime'];

        if (!$kelime) {
            echo "<h2 class='p-3'> Arama kısmını boş bırakmayınız ! </h2>";
        } else {
            $sorgu = $db->prepare("SELECT * FROM books WHERE bookName LIKE :bookName");
            $sorgu->execute(array(':bookName' => '%' . $kelime . '%'));

            if ($sorgu->rowCount()) {
    ?>
                <h2 class="p-3"> <?php echo "'" . $kelime . "'" . "  arama sonuçları"; ?> </h2>

                <div class="container bg-dark">
                    <?php

                    foreach ($sorgu as $row) {
                    ?>
                        <div class="card-deck m-auto" style="height:auto; float:left; ">
                            <div class="card ml-5 mb-5" style="height:450px; width:200px;">
                                <a href="product.php?ID=<?php echo $row['bookId']; ?>">
                                    <img class="card-img-top mt-2" style="width:150px; height:250px " src="<?php echo $row['bookImage']; ?>" alt="Card image cap">
                                </a>

                                <div class="card-body">
                                    <div class="name">
                                        <a href="product.php?ID=<?php echo $row['bookId']; ?>"> <?php echo $row['bookName']; ?> </a>
                                    </div>

                                    <div class="author">
                                        <a href=""><?php echo $row['bookAuthor']; ?></a>
                                    </div>
                                    <div class="publisher">
                                        <a href=""><?php echo $row['bookPublisher']; ?></a>
                                    </div>

                                </div>
                                <div class="book-price">

                                    <div class="discount-badge">
                                        <small>%</small>
                                        <span>50</span>
                                    </div>

                                    <div class="price">
                                        <span class="old-price"><?php echo 2 * $row['bookPrice']; ?> TL</span>
                                        <span class="product-price"> <?php echo $row['bookPrice']; ?> TL</span>
                                    </div>
                                </div>
                            </div>
                        </div>

        <?php
                    }
                } else {
                    echo "<h2> Kitap bulunamadı ! </h2>";
                }
            }
        }
        ?>

</main>


                                





















<div class="footer-basic">
    <footer>
        <div class="social "><a href="#"><i class="fab fa-instagram fa-1x"></i></a><a href="#"><i class="fab fa-facebook-f fa-1x"></i></a><a href="#"><i class="fab fa-twitter fa-1x"></i></a></div>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="http://localhost/koskitap.com/index.php">Anasayfa</a></li>
            <li class="list-inline-item"><a href="http://localhost/koskitap.com/hakkimizda.php">Hakkımızda</a></li>
            <li class="list-inline-item"><a href="http://localhost/koskitap.com/iletisim.php">İletişim</a></li>
        </ul>
        <p class="copyright">Koş Kitap © 2021</p>
    </footer>
</div>
</body>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>



</html>