<p>Bu sitenin tüm telif hakları <em>Mert Özer</em>'e aittir. Kaynak gösterilmeden ve izin alınmadan hiçbir içerik yayınlanamaz, çoğaltılamaz veya paylaşılamaz.</p>

<?php
$kapat = $_POST['kapat'];
if(isset($kapat)){
    setcookie("kapatma","kapatılıyor",time() + (3600*24*30));
header("Location: https://mert.techredio.com");
}
if(!isset($_COOKIE['kapatma'])){
?>
<div id="bilgi">
<p>Sana sitemde en iyi deneyimi yaşatabilmek için TechRedio'da çerezler kullanıyorum. Sitemi kullanmaya devam ederek bunu kabul etmiş oluyorsun.</p>
        <button name="kapat" onclick="kapat()">Kapat</button>
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