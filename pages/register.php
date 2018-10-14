<?php
$register = 0;
if (isset($_POST['submit'])) {
    if (isset($_POST['adsoyad']) && isset($_POST['userName']) && isset($_POST['password'])){
        if (!empty($_POST['adsoyad']) && !empty($_POST['userName']) && !empty($_POST['password'])) {
            $user[0]["adsoyad"] = $_POST["adsoyad"];
            $user[0]["userName"] = $_POST["userName"];
            $user[0]["password"] = $_POST["password"];
            $register = 1;
        }
    }
}
?>
<div class="py-3"><br><br><br><br><br>
    <?php
    if ($register){
        echo $user[0]["adsoyad"]." kaydınız başarıyla tamamlanmıştır.:))))))))))))))";
        echo " Kullanıcı Adınız: ".$user[0]["userName"];
        echo " Şifreniz : ".$user[0]["password"];

    }
    else
    {
        ?>
        <div class="card">
            <form action="" method="post">
                <h3><label for="">Lütfen zorunlu alanları doldurunuz</label><br></h3>
                <div class="form-group">
                    <input type="text" class="form-control ml-5 mt-2" style="width: 300px" name="adsoyad" placeholder="*Adınızı ve Soyad"><br>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control ml-5" style="width: 300px" name="userName" placeholder="*Kullanıcı adı"><br>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control ml-5" style="width: 300px" name="password" placeholder="*******"><br>
                </div>
                <div class="form-group">
                    <input type="number" class="form-control ml-5" style="width: 300px" name="yas" placeholder="18"><br>
                </div>
                <div class="form-group">
                    <input type="tel" class="form-control ml-5" style="width: 300px" name="tel" placeholder="5xx xxx xx xx"><br>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control ml-5" style="width: 300px" name="okul" placeholder="Üniversite"><br>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-danger ml-5" style="width: 150px" name="submit" value="Kayıt Ol"><br>
                </div>
            </form>
        </div>
        <?php
    }
        ?>
</div>