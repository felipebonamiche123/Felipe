<?php include_once "header.php" ?>
<?php include_once "menu.php" ?>

<?php  
    $id = $_GET("id");
    $noticia = $noticias[$id];


?>
<div class = "container">
     <h1><?php echo $noticia["titulo"];?></h1>
     <hr>
    <img src="<?php echo $noticia["imagem"];?>"class=""/>
    <p>    <?php echo $noticia["materia"];?>        </P>
    <p>testo da noticia</p>
</div>
<?php include_once "rodape.php" ?>