<?php
    require 'model/index.php';

  class ModeloController{
        private $model;
        public function __construct(){
            $this->model=new Modelo();
        }
        // Iniciar en la pagina de inicio
        static function iniciar(){
          require_once("view/login.php");
        }
          static function inicio(){
          require_once("view/home_adm.php");
        }
      
        // NUEVO USUARIO, REGISTRO
        static function nuevo(){
           require_once("view/registro.php");
        }

        //  Guardar datos de usuario
         static function guardaru(){
          $nombre=$_REQUEST['nombre'];
          $apellido=$_REQUEST['apellido'];
           $correo=$_REQUEST['correo'];
          $n_usuario=$_REQUEST['n_usuario'];
          $rol=$_REQUEST['rol'];
          $contrasenia=$_REQUEST['contrasenia'];
          $data="'".$nombre."','".$apellido."','".$correo."','".$n_usuario."','".$rol."','".$contrasenia."'";
         
          $usuario=new Modelo();
          $condicion="nombre='".$nombre."' AND apellido='".$apellido."' AND correo='".$correo."' AND n_usuario='".$n_usuario."' AND rol='".$rol."' AND clave='".$contrasenia."'";

            if($usuario->validar_User_existente("usuario","n_usuario='".$n_usuario."'","correo='".$correo."'")){
              header('location:'.ModeloController::nuevo());
               echo "<script>alert('el nombre de usuario: $n_usuario o el correo: $correo ya estan siendo utilizados');</script>";
            }else{
              $dato=$usuario->insertar("usuario",$data);
               header('location:'.'index.php?n=iniciar');
            }
       }
       static function login(){
        $n_usuario=$_REQUEST['n_usuario'];
        $contrasenia=$_REQUEST['contrasenia'];
         $datos=new Modelo();
         $data="n_usuario='".$n_usuario."' AND clave='".$contrasenia."'";
         $dato=$datos->login("usuario",$data);

         $adm = $datos->definirAdm($n_usuario);
         $est = $datos->definirEst($n_usuario);
        
        if($dato==true && $adm==true){
            //require_once 'view/home_adm.php';
            header('location:'.'index.php?n=inicio');
        }else if ($dato==true && $est==true){
            require_once 'view/home_est.php';
        }
        else{
            
          header('location:'.ModeloController::iniciar());
          echo "<script>alert ('la contraseña o el nombre de usuario es incorrecto');</script>";

        
        }
      }
      static function usuarios(){
        require_once 'view/adm/usuarios.php';
      }
      static function libros(){
        require_once 'view/adm/libros.php';
      }
      static function prestamos(){
        require_once 'view/adm/prestamos.php';
      } 
    }
?>