<?php
echo'    <header><h1 id="techrediohttpstechrediocom"><a href="https://techredio.com">Techredio</a></h1>
<hr/>
<p>Benim hakkımda herşey!</p></header>';
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div id="dialog">
<dialog title="Youtube kanalıma siz de uğrayın">

        <h2>Youtube kanalımda birbirinden güzel içerikler seni bekliyor.</h2>
    
        <p>Youtube kanalımda, başta teknoloji ve müzik konuları olmak üzere birbirinden kaliteli ve güzel içerikler seni bekliyor!</p>
<button onclick="kapat()" id="kapat">Kapat</button>
</dialog>   
</div>
<script>
    var modal = document.getElementByİd("dialog");
showModal();    
function kapat(){
  modal.style="display: none;"


}
</script>





</body>
</html>