<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
    <footer>
    <p>Bu sitenin tüm telif hakları <em>Mert Özer</em>'e aittir. Kaynak gösterilmeden ve izin alınmadan hiçbir içerik yayınlanamaz, çoğaltılamaz veya paylaşılamaz.</p>

<?php
$accept = $_POST['accept'];
if(isset($accept)){
    setcookie('kapatma','kapatiliyor',time() + (3600 * 24 * 30));
header("Location: https://mert.techredio.com");
}
if(!isset($_COOKIE['kapatma'])){
?>
<div id="bilgi">
<p>Sana sitemde en iyi deneyimi yaşatabilmek için TechRedio'da çerezler kullanıyorum. Sitemi kullanmaya devam ederek bunu kabul etmiş oluyorsun.</p>
<button name="accept" onclick="kapat()">Kapat</button>
    </div>

<script>
    function kapat(){
        var yertutucu = document.getElementById('bilgi'); // ID'si bilgi olan div elemanını seçer ve yertutucu değişkenine atar
yertutucu.style = "display: none;"
    }
</script>
<?php
}
?>
</body>
</html>