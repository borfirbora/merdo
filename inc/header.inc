<!-- Sayfa Başlıyor -->
<!-- yer tutucu -->
<div class="container-fluid">
<!-- satır -->
    <div class="row">
<!-- menüler -->
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <span class="navbar-brand"><img src="logo.jpg" alt="<?php echo $site['ad']; ?>" width="30" hight="30"/></span>
    <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Ana Menü">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div id="my-nav" class="collapse navbar-collapse">
<ul id="myTab" class="nav nav-tabs">
         <li class="active">
            <a href="#anasayfa" data-toggle="tab">
               <?php echo $site['ad']." Anasayfa"; ?>
            </a>
         </li>
         <li><a href="#yayin-akisi" data-toggle="tab">Yayın Akışı</a></li>
         <li><a href="#duyurular" data-toggle="tab">Bizden Haberler</a></li>
         <li class="dropdown">
            <a href="#" id="dj" class="dropdown-toggle" 
               data-toggle="dropdown">DJ Menüsü 
            </a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dj">
               <li><a href="#dj-ol" tabindex="1" data-toggle="tab">DJ Ol</a></li>
               <li><a href="#dj-girisi" tabindex="2" data-toggle="tab">DJ Girişi</a></li>
            </ul>
         </li>
         <li><a href="#hakkimizda" data-toggle="tab">Hakkımızda</a></li>
         <li><a href="#iletisim" data-toggle="tab">İletişim</a></li>
      </ul>
    </div>
</nav>
        </div> <!-- menüler sonu -->
<!-- ana içerik -->
        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
<div role="main">