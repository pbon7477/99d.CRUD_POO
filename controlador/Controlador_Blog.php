
<?php 
include_once('modelo/Conexion.php');
include_once('modelo/Objeto_Blog.php');

class Controlador_Blog{
    private $blog;

    public function __construct(){
        $this->blog = new Objeto_Blog();
    }

    public function index(){
        $resultado = $this->blog->list();
        return $resultado;
    }

    


/*metodo crear */
    public function crear($titulo,$fecha,$comentario,$imagen){
        
        $this->blog->subirImagen();

        $this->blog->set('titulo',$titulo);
        $this->blog->set('fecha',$fecha);
        $this->blog->set('comentario',$comentario);
        $this->blog->set('imagen',$imagen);

        $resultado = $this->blog->insert();
        
        return $resultado;
    }

    public function eliminar($id){
        $this->blog->set('id',$id);
        $this->blog->delete();
    }

    public function ver($id){
        $this->blog->set('id',$id);
        $resultado = $this->blog->read();
        return $resultado;
    }

    public function editar($id,$titulo,$fecha,$comentario,$imagen){
        
        $this->blog->set('id',$id);
        $this->blog->set('titulo',$titulo);
        $this->blog->set('fecha',$fecha);
        $this->blog->set('comentario',$comentario);

        if($_FILES['imagen']['name']){
            $this->blog->subirImagen();
            $this->blog->set('imagen',$_FILES['imagen']['name']);       
        }else{            
            $this->blog->set('imagen',$imagen);       
        }        

        $this->blog->update();
    }


    

}

?>