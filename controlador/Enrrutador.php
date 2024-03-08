
<?php 

class Enrrutador{
    public function cargarVista($vista){
        switch($vista){
            case 'inicio':
            include_once("vistas/" . $vista . ".php");
            break;

            case 'crear':
            include_once("vistas/" . $vista . ".php");
            break;
            
            case 'modo_edicion':
            include_once("vistas/" . $vista . ".php");
            break;
                       
            case 'editar':
            include_once("vistas/" . $vista . ".php");
            break;

            case 'eliminar':                
            include_once("vistas/" . $vista . ".php");
            break;
            
            case 'ver':                
            include_once("vistas/" . $vista . ".php");
            break;

            default:
            include_once('vistas/error.php');
        }
    }

    
}

?>