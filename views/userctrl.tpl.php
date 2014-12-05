<?php
    $user = new Usuario();
?>
<html>
<head></head>
<body>
<H1><?php echo $titulo ?></h1>
<p><?php echo $cont ?></p>
<p><?php echo $nombre ?></p>
<p>
    <?php
    $user->setUsuario();
    $user->getUsuario();
    $user->Read();
    ?>
</p>
</body>
</html>