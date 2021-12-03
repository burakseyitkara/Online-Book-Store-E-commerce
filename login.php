<?php
session_start();
require_once 'database.php';
include_once 'header.php';
?>

<main>
    <div class="login">
        <div class="login-form-area">
            <div class="login-form">
                <div class="login-header">
                    <p>Giriş yap</p>
                    <span>Giriş bilgilerinizi giriniz.</span>
                </div>

                <div class="input-box">

                    <form method="POST" id="FrmLoginMember">
                        <label for="">Email Adresiniz</label><br>
                        <input type="email" name="usersEmail" placeholder="Email adresinizi giriniz."><br><br>
                        <label for="">Şifreniz</label><br>
                        <input type="password" name="usersPassword" placeholder="Şifrenizi giriniz.">
                        <button type="button" onclick="SendForm()" class="btn btn-danger">Giriş</button>

                        <div>
                            <p id="result"> </p>
                        </div>
                    </form>
                </div>

                <div class="login-footer">
                    <p>Hesabınız yok mu ? <a href="http://localhost/koskitap.com/register.php">Buradan üye olun.</a></p>
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

<script>
    function SendForm() {

        var mydata = $("#FrmLoginMember").serialize();

        $.ajax({

            type: "post",
            data: mydata,
            url: 'http://localhost/koskitap.com/ajax_islemler_login.php',
            success: function(data) {
                if ($.trim(data) == "bos") {
                    $("#result").html('<div class="alert alert-warning"> Lütfen boş alan bırakmayınız. </div>');

                } else if ($.trim(data) == "error") {
                    $("#result").html('<div class="alert alert-danger"> Eposta veya şifre hatalı. </div>');
                } else if ($.trim(data) == "done") {
                    $("#result").html('<div class="alert alert-success"> Başarıyla giriş yaptınız. Anasayfaya yönlendiriliyorsunuz... </div>');
                    setTimeout(function() {
                        window.location.href = 'http://localhost/koskitap.com/index.php';
                    }, 1500);
                }
            }
        });
    }
</script>





<script src="https://kit.fontawesome.com/81720d9798.js" crossorigin="anonymous"></script>


</body>

</html>