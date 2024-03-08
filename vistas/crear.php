<?php 
$controlador = new Controlador_Blog();

if(isset($_POST['btnCrear'])){
    $registro  = $controlador->crear($_POST['titulo'],
                                     $_POST['fecha'],
                                     $_POST['comentario'],
                                     $_FILES['imagen']['name']);

    if($registro == true){
        echo "<p>Se regitro una nueva entrada de blog.</p>";
        echo "<a href='index.php'><button>ver blog</button></a>";
    }
}
?>

<h4>Crear nueva entrada</h4>


    <div class="row  mb-5">
        <div class="col d-flex justify-content-center">
            <form class="needs-validation" action="" method="POST" enctype="multipart/form-data" novalidate>
                        <!--input titulo-->
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Titulo:</label>
                            <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Titulo de la entrada..." required>
                            <div class="invalid-feedback">Ingrese el titulo</div>
                        </div>
                        <!--input comentario-->
                        <div class="mb-3">
                            <label for="comentario" class="form-label">Comentario:</label>
                            <textarea class="form-control" name="comentario" id="comentario" rows="3" cols="3" maxlength="220"  required></textarea>
                            <div class="invalid-feedback">Ingrese un comentario</div>
                        </div>
                        <!--input archivo imagen-->
                        <div class="mb-3">
                            <label for="imagen" class="form-label">Imagen:</label>
                            <input type="file" class="form-control form-control-sm" name="imagen" id="imagen" required>
                            <div class="invalid-feedback">Seleccione una imagen de su directorio </div>
                        </div>
            
                        <!--input fecha -->
                        <div class="mb-3">
                            <label for="fecha" class="form-label">Fecha:</label>
                            <input type="date" class="form-control form-control-sm" name="fecha" id="fecha" required>
                            <div class="invalid-feedback">Ingrese una fecha</div>
                        </div>
            
                        <!--input submit-->
                        <div class="col-12">
                            <button class="btn btn-primary" name="btnCrear" type="submit">Enviar</button>
                        </div>
            
                    </form>
        </div>
    </div>
