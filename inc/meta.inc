<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
<?php
$q=$con->query("SELECT * FROM `site`;") or die("Hata: ".$con->error);
$site=$q->fetch_array()
?>
<title><?php if($sayfaBasligi!==""){echo $sayfaBasligi;}else{echo $site[2];} ?> - <?php echo $site[1]; ?></title>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>
<body class="bg-primary">