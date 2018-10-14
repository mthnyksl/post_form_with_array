<?php
$register = 0;
if (isset($_POST['submit'])){
    if ( isset($_POST['adsoyad']) && isset($_POST['userName']) && isset($_POST['password']) )
        if ( !empty($_POST['adsoyad']) && empty($_POST['userName']) && empty($_POST['password']) ){
            $user[0]["adsoyad"] = $_POST["adsoyad"];
            $user[0]["userName"] = $_POST["userName"];
            $user[0]["password"] = $_POST["password"];
            $register = 1;
        }

}
?>
<div class="py-3"><br><br><br><br><br>
    <?php
    if ($register)
    echo $user[0]["adsoyad"]."kaydınız bşarıyla tamamlanmıştır.";
    else
    {
        ?>
        <form action="" method="post">
            <label for="">Lütfen zorunlu alanları doldurunuz</label><br>
            <input type="text" name="adsoyad" placeholder="*Adınızı ve Soyad"><br>
            <input type="text" name="userName" placeholder="*Kullanıcı adı"><br>
            <input type="password" name="password" placeholder="*******"><br>
            <input type="number" name="yas" placeholder="18"><br>
            <input type="tel" name="tel" placeholder="5xx xxx xx xx"><br>
            <input type="text" name="okul" placeholder="Üniversite"><br>
            <input type="submit" name="submit" value="Kayıt Ol"><br>
        </form>

        <?php
    }
        ?>
</div>