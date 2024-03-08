
<?php 
include_once('controlador/Enrrutador.php');
include_once('controlador/Controlador_Blog.php');

$enrrutador = new Enrrutador();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD 99b</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
</head>
<body>
    
    <?php include('vistas/navBar.php'); ?>
    <h4>99d.CRUD:Entradas de blog</h4><hr/>
    
    <section>
        <?php 

        if(!isset($_GET['cargar'])){
            $enrrutador->cargarVista('inicio');
        }else{          
            $enrrutador->cargarVista($_GET['cargar']);
        }        


        ?>
        
    </section>
    
    <script src='css/bootstrap/js/bootstrap.bundle.js'></script>
    <script src='css/bootstrap/js/validar_formulario.js'></script>
    
    
</body>
</html>