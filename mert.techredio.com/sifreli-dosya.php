<?php
$giris = $_POST['giris'];
$sifre = $_POST['sifre'];
if(isset($giris)){
if($sifre == 124816){
    setcookie("ad","mert",time() + (3600*24*30));
    header("Location: iletisim-formu.php");
}
else
{
    echo'<div role="alert"><p>Şifre yanlış...</p></div>';
}
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Şifreli dosya</title>
</head>
<body>
<form method="POST"     name="sifreli-dosyam">
    Şifreyi giriniz: <input type="password" required="required" name="sifre" placeholder="Şifreyi girin:">
<input type="submit" name="giris" value="Giriş yap">
</form>
</body>
</html>