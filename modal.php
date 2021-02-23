<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Kapatma denemesi</h1>
        <p>Şuan bir kapatma denemesi yapıyorum.</p>
            <p>Aşağıdaki paragrafı kapatmak için kapat düğmesine basın.</p>

            <div id="kapatma-paragraf">
<p>Sana sitemde en iyi deneyimi yaşatabilmek için TechRedio'da çerezler kullanıyorum. Sitemi kullanmaya devam ederek bunu kabul etmiş oluyorsun.</p>
        <button name="kapat" onclick="kapat()">Kapat</button>
    </div>
<script>
function kapat(){
<<<<<<< HEAD:modal.html
var a = document.getElementById('kapatma-paragraf');
=======
var a = document.getElementByİd('kapatma-paragraf');
>>>>>>> b13a672e4ddd899fb4c78492abe9e4e2fa440366:modal.php
a.style="display: none;";
}
</script>

</body>
</html>