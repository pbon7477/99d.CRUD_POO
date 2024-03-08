<?php 

$controlador = new Controlador_Blog();
$resultado = $controlador->index();
?>

<h4 class='text-primary'>Pagina de inicio</h4>

<div class="container-grid">
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

    echo "<div class='vermas'>";
    echo "<a href='?cargar=ver&id=" . $row['id'] . "'>ver más</a>";   
    echo "</div>";

    echo "</div>";
    
}

?>
</div>

