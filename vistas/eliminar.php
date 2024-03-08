<?php
$controlador = new Controlador_Blog();

if (isset($_GET['id'])) {
    $row = $controlador->ver($_GET['id']);
} else {
    header('Location:index.php');
}

if (isset($_POST['btnEliminar'])) {
    $controlador->eliminar($_GET['id']);
    header('Location:index.php');
}

?>

<h4>Eliminar</h4>
<small>Información:</small><br>
<small>id: <?php echo $row['id']; ?> </small><br>
<small>Titulo: <?php echo $row['titulo']; ?> </small><br><br>
<small><b>Esta seguro que desea eliminar esta entrada de blog? </b></small><br>

<div class="table-responsive">
    <form class="needs-validation mt-3" action="" method="POST" novalidate>
        <button type="sumbit" name="btnEliminar" value="eliminar">Eliminar</button>

    </form>
</div>
<div class="row mt-5">
    <a href="index.php"><button>cancelar</button></a>
</div>