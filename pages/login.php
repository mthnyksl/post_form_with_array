<?php
    $login=0;
    $message = "";
    if (isset($_POST['submit'])){
        if ( isset($_POST['username']) && isset($_POST['password']) ) {
            if (!empty($_POST['username']) && !empty($_POST['password']) && !strlen($_POST['password']) < 7 ){
                if (login($_POST['username'],$_POST['password'],$user[0])){
                    $login = 1;
                    $message = "hosgeldiniz sayın --> ".$_POST['username'];
                }
                else{
                    $login = 2;
                    $message = "Böyle bir kullanıcı adı veya şifre bulunamadı";
                }
            }
            else{
                $login = 3;
                $message = "Kullanıcı adı veya şifre boş bırakılamaz";
            }
        }
        else{
            $login =4;
            $message = "Beklenmedik hata oluştu";
            $alert = 1;
        }
    }
    else{
        $login = 0;
    }
?>
<div class="py-3"> <br><br><br><br><br>
    <?php  if ($login==0 || $login==2 || $login==3) {
        echo $message;
    ?>
    <form action="" name="login" method="post">
        <div class="form-group">
            <input type="text" class="form-control ml-5 mt-2" style="width: 300px" name="username" placeholder="Kullanıcı adınız"><br>
        </div>
        <div class="form-group">
            <input type="password" class="form-control ml-5" style="width: 300px" name="password" placeholder="********"><br>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-danger ml-5" style="width: 150px" name="submit" value="Giriş Yap"><br>
        </div>
    </form>
    <?php }
    else if ($login==1){
        header('Location: login/index.php');
    }
    else if ($login==4){
        echo $message;
    }
    ?>
</div>
