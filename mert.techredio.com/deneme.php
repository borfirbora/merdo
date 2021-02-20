<?php
if(isset($_POST['tamam'])){
setcookie("ad","mert",time() + (3600 * 24));
header("Location: deneme.php");
}
if(isset($_COOKIE['ad'])){
echo'Çerez tanımlandı';
}

else
{
?>
    <!DOCTYPE html>
    <html lang="tr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form method="POST" name="deneme">
            <input type="submit" value="tamam" name="tamam">
        
        </form>
        
    </body>
    </html>
    
    

<?php
}

?>

