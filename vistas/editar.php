
<?php 
$controlador = new Controlador_Blog();


if(isset($_GET['id'])){
    $row = $controlador->ver($_GET['id']);
}else {
    header('Location:index.php');
}

if(isset($_POST['btnEditar'])){    
    
    if(isset($_POST['imagen'])){
        $imagen = $_FILES['imagen']['name'];
    }
    if(!isset($_POST['imagen'])){
        $imagen = $_POST['imagenActual'];
    }
    
    $controlador->editar($_GET['id'],$_POST['titulo'],$_POST['fecha'],$_POST['comentario'],$imagen);    
    
}

?>

<h4>Editar entrada:</h4>


    <div class="row  mb-5">
        <div class="col d-flex justify-content-center">
            <form class="needs-validation" action="" method="POST" enctype="multipart/form-data" novalidate>
                        <!--input id-->
                        <div class="col-2 mb-3 ">
                            <label for="id" class="form-label">id:</label>
                            <input type="text" name="id" class="form-control" id="id" value=<?php echo $row['id']; ?> disabled>
                            
                        </div>
                        <!--input titulo-->
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Titulo:</label>
                            <input type="text" name="titulo" class="form-control" id="titulo"  value='<?php echo $row['titulo']; ?>' required>
                            <div class="invalid-feedback">Ingrese el titulo</div>
                        </div>
                        <!--input comentario-->
                        <div class="mb-3">
                            <label for="comentario" class="form-label">Comentario:</label>
                            <textarea class="form-control" name="comentario" id="comentario" rows="4" cols="3" maxlength="220" ><?php echo $row['comentario']; ?></textarea>
                            <div class="invalid-feedback">Ingrese un comentario</div>
                        </div>
                        
                        <!--input archivo imagen actual-->
                        <div class="mb-3">                    
                            <input type="text" class="form-control form-control-sm" name="imagenActual" id="imagenActual" value='<?php echo $row['imagen']; ?>' hidden>
                         </div>

                        <!--input archivo imagen nueva-->
                        <div class="mb-3">
                            
                            <label for="imagen" class="form-label">Seleccione una nueva imagen</label>
                            <input type="file" class="form-control form-control-sm" name="imagen" id="imagen">
                            <div class="invalid-feedback">Seleccione una imagen de su directorio </div>
                            <small>Si no selecciona una nueva imagen, permanecerá la imagen actual.</small>
                        </div>
            
                        <!--input fecha -->
                        <div class="mb-3">
                            <label for="fecha" class="form-label">Fecha:</label>
                            <input type="date" class="form-control form-control-sm" name="fecha" id="fecha" value=<?php echo $row['fecha']; ?> required>
                            <div class="invalid-feedback">Ingrese una fecha</div>
                        </div>
            
                        <!--input submit-->
                        <div class="col-12">
                            <input class="btn btn-primary" name="btnEditar" type="submit" value="Editar"></input>
                            <a href="index.php"><button>cancelar</button></a>
                        </div>
                        
                    </form>

        </div>
        <div class="col">
            <div class="cajita">
                <img src='imagenes/<?php echo $row['imagen']; ?>' alt="">
                <p>imagen actual: <?php echo $row['imagen']; ?></p>
            </div>
        </div>
    </div>