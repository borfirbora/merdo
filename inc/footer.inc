</div>
</div> <!-- ana içerik sonu -->
<!-- Alt kısım -->
<div class="col-md-12 col-xs-12">
<nav class="nav" aria-label="Sosyal Medya Bağlantıları">
<?php
$sosyalmedya=$con->query("SELECT * FROM sosyalmedya;");
if(!$sosyalmedya){
echo "hata: ".$con->mysqli_error;
}
while($veri=$sosyalmedya->fetch_assoc())
{
?>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo $veri['url']; ?>" target="_blank"><?php echo $veri['ad']; ?> <span class="sr-only">(Yeni Pencerede Açılır)</span></a>
    </li>
<?php
}
?>
</nav>
<footer aria-label="<?php echo $site['ad']; ?>">
<?php echo $md->text($site['altlik']); ?>
<hr />
<p>Tasarım: <a href="https://borfirbora.com/" target="_blank">Bora FIRLANGEÇ <span class="sr-only">(Yeni Pencerede Açılır)</span></a></p>
</footer>
</div> <!-- alt kısım sonu -->
    </div> <!-- satır sonu -->
</div> <!-- yer tutucu sonu -->

<!-- Script'ler -->

    <!-- script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="inc/validate/jquery.validate.js"></script>
<script src="inc/validate/localization/messages_tr.js"></script>
</body>
</html><?php $con->close(); ?>