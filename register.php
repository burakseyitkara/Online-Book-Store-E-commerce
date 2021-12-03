<?php
session_start();
require_once 'database.php';
include_once 'header.php';
?>
<main>

    <div class="register">
        <div class="register-form-area">
            <div class="register-form">
                <div class="register-header">
                    <p>Üye ol</p>
                    <span>Daha fazla avantajlı kitaplara ulaşmak için üye olun!</span>

                </div>
                <div class="register-input-box">

                    <form method="POST" id="FrmAddMember">
                        <label for="">Ad Soyad </label><br>
                        <input type="text" name="usersName" placeholder="Ad ve soyadınızı giriniz."><br><br>
                        <label for="">Email</label><br>
                        <input type="email" name="usersEmail" placeholder="Email adresinizi giriniz."><br><br>
                        <label for="">Şifreniz</label><br>
                        <input type="password" name="usersPassword" placeholder="Şifrenizi giriniz."><br><br>
                        <label for="">Şifreniz Tekrar</label><br>
                        <input type="password" name="PasswordRepeat" placeholder="Şifrenizi tekrar giriniz.">
                        <div>
                            <button type="button" class="btn btn-danger" onclick="SendForm()">Kayıt ol </button>
                        </div>
                        <div>
                            <p id="result"> </p>
                        </div>
                    </form>

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

        var mydata = $("#FrmAddMember").serialize();

        $.ajax({

            type: "post",
            data: mydata,
            url: 'http://localhost/koskitap.com/ajax_islemler_register.php',
            success: function(data) {
                if ($.trim(data) == "bos") {

                    $("#result").html('<div class="alert alert-warning"> Lütfen boş alan bırakmayınız. </div>');

                } else if ($.trim(data) == "name") {
                    $("#result").html('<div class="alert alert-warning"> Adınızı ve soyadınızı lütfen eksiksiz giriniz. </div>');
                } else if ($.trim(data) == "pwdMatch") {
                    $("#result").html('<div class="alert alert-danger"> Şifreler birbiriyle uyuşmuyor. </div>');
                } else if ($.trim(data) == "shortPwd") {
                    $("#result").html('<div class="alert alert-warning"> Şifreniz 8 karakterden az olamaz. </div>');
                } else if ($.trim(data) == "email") {
                    $("#result").html('<div class="alert alert-warning"> Epostanızı doğru giriniz. </div>');
                } else if ($.trim(data) == "existEmail") {
                    $("#result").html('<div class="alert alert-danger"> Bu email kullanılmaktadır. </div>');
                } else if ($.trim(data) == "done") {
                    $("#result").html('<div class="alert alert-success"> Kayıt eklendi, giriş sayfasına yönlendiriliyorsunuz... </div>');

                    setTimeout(function() {
                        window.location.href = 'http://localhost/koskitap.com/login.php';
                    }, 1500);

                } else if ($.trim(data) == "error") {
                    $("#result").html('<div class="alert alert-danger">Üzgünüz bir hata oluştu.</div>');
                }
            }
        });
    }
</script>




</body>

</html>