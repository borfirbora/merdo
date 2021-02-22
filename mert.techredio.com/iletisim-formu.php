<?php
if(!isset($_COOKIE['ad'])){
header("Location: sifreli-dosya.php");
}
?>
<!DOCTYPE html>
    <html lang="tr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>İletişim formu yazılanlar:</title>
    </head>
    <body>
<h1>Forma girilenler</h1>
<?php
include'iletisim-formu.txt';
?>
</body>
</html>