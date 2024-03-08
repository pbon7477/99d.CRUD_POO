
<?php 

$controlador = new Controlador_Blog();
if(isset($_GET['id'])){
    $row = $controlador->ver($_GET['id']);
}else{
    header('Location:index.php');
}

?>

<h4>Entrada de blog:</h4>
<div class="row">
    <div class="col">
    <div class='cajitaVer'>
    <p><b> id:</b><?php echo $row['id']; ?></p>   
    <p> <b>Titulo:</b> <?php echo $row['titulo']; ?></p>   
    <p> <b>Fecha:</b> <?php echo $row['fecha']; ?></p>   
    <p> <b>Comentario:</b> <?php echo $row['comentario']; ?></p>
    <p><b>Nombre imagen:</b> <?php echo $row['imagen'];?></p>       
    
   
    
</div>

    </div>
    <div class="col cajitaVer">
    <?php 
    if(empty($row['imagen'])){                
        echo "<img src='images/default.png' alt='no imagen'>";
    }else{
        echo "<img src='imagenes/" . $row['imagen'] . "' alt=''>";
    }
    ?>

    </div>

</div>
