<?php 



$controlador = new Controlador_Blog();
$resultado = $controlador->index();
?>

<div class="continer bg-warning p-2">
    <h4 class='text-danger'>MODO EDICIÓN</h4>
    <p>Atención!!.<br> Los cambios realizados en esta sección no son reversibles.<br>
    <b>Accione con precaución.</b></p>
</div>

<div class="container-grid bg-warning py-2">
<?php 
while($row = $resultado->fetch(PDO::FETCH_ASSOC)){
    echo "<div class='cajita'>";
    echo "<p>" .$row['titulo'] ."</p>";    
    echo "<p><small>id: " .$row['id'] ."</small></p>";    
    echo "<p><small>" .$row['fecha'] ."</small></p>";    

    if(empty($row['imagen'])){
        echo "<img src='images/default.png' alt=''>";
    }else{
        echo "<img src='imagenes/" . $row['imagen'] . "' alt=''>";
    }

    echo "<p>" . $row['comentario'] . "</p>";
    echo "<hr>";
        echo "<div class='btnEdiciones'>";
        echo "<span> </span><a href='?cargar=ver&id=" . $row['id'] . "'><button>ver más</button></a>";
        echo "<span> </span><a href='?cargar=editar&id=" . $row['id'] . "'><button>editar</button></a>";
        echo "<span> </span><a href='?cargar=eliminar&id=" . $row['id'] . "'><button>eliminar</button></a>";
        echo "</div>";
    echo "</div>";
    
}

?>
</div>

