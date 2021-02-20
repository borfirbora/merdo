<?php
include('header.php');
?>

<?php
$ad = $_POST['ad'];
$mesaj = $_POST['mesaj'];
if(isset($_POST['gonder'])){
if(empty($_POST['ad'])){
echo'<div role="alert"><p>Heeey, Adın ne? Yazmayı unuttun!</p></div>';

}
elseif(empty($_POST['mesaj'])){
echo'<div role="alert"><p>Heeeey? Mesajın nedir? Onu yazmadın.</p></div>';

}
else
{
    echo'<div role="alert"><p>Mesajın gönderildi, Teşekkürler '.$_POST['ad'].'</p></div>';


    touch("iletisim-formu.txt"); // dosya oluşturur
    $f=fopen("iletisim-formu.txt","a"); // dosyayı yazmak üzere açar
    fwrite($f,"
        <p>adı: $ad</p>
        <p>Mesajı:</p><p>$mesaj</p>
    ");
    fclose($f); // yazmayı bitirdiği için dosyayı kapatır.
    

}
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mert Özer, benim hakkımda herşey</title>
</head>
<body>
    
    <main>
    <h2 id="mert-ozer"><strong>Mert özer</h2></strong>
    <p>Merhaba arkadaşlar. Ben mert. <strong>Techredio</strong> sitesinin tek geliştiricisiyim. Bu sayfada, teknoloji de dahil olmak üzere, benim hakkımda da yazılmış yazıları, hayatımı, videolarımı vb. içerikleri bulacaksınız.</p>
    <p>Hadi <strong>yola</strong> çıkalım!!!</p>
    <h3 id="aklna-taklan-birsey-mi-var">Aklına takılan birşey mi var?</h3>
    <p>Bana</p>
    <p><strong><a href="mailto:ozermert26@gmail.com">E-posta gönder</a></p></strong>
    <p>Veya</p>
 <p><strong>Aşağıdaki formu kullan</strong></p>

<h2>İletişim formu</h2>
<form method="POST" name="iletisim">
    Ad-soyad: <input name="ad" placeholder="Ad-soyad"><br>
<textarea cols="30" rows=50" name="mesaj" placeholder="Mesajınız"></textarea><br>    
<input name="gonder" type="submit" value="Mesajı gönder">
</form>
</main>
</body>
</html>



<?php
include'footer.php';
?>