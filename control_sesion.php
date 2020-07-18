<?php 
require_once"./conexion2.php";
include("conexion.php");

if(isset($_POST['enviar2'])){
    if((strlen($_POST['usuario2'])) >=1 && (strlen($_POST['contra2'])) >=1 &&(strlen($_POST['contra3'])) >=1){
        if(($_POST['contra2'])==(($_POST['contra3']))){
        $usuario2= trim($_POST['usuario2']);
        $contra2= trim($_POST['contra2']);
        $contra3= trim($_POST['contra3']);
        $consulta= "INSERT INTO datos(user1, pass0,pass1) VALUES ('$usuario2','$contra2','$contra3')";
        $resultado=mysqli_query($conex,$consulta);
        if($resultado){

            ?>
            <h3 class="ok">¡Te has inscrito correctamente!</h3>
            <?php 
            header("Location: index.php");
            ?>
            <?php 

          
        }else{
             ?>
            <h3 class="bad">¡Ups, al parecer el nombre de usuario ya está registrado!</h3>
            <?php 
        }
        }else{
             ?>
            <h3 class="bad">Las contraseñas no coinciden!</h3>
        <?php   
        }

    }else{
        ?>
            <h3 class="bad">Completa los campos!</h3>
        <?php 
        }
}	
verificacion();
function verificacion(){
    $mysql = conexionSQL();

    $qa =("SELECT * FROM datos WHERE User1='".$_POST['usuario']."' AND pass0 ='".$_POST['contrasena']."'");
    $Admins = $mysql->query($qa);

    if(mysqli_num_rows($Admins)!=0){
    if(mysqli_num_rows($Admins)!=0){
        session_start();
            $_SESSION['userad']= $_POST['usuario'];
            $_SESSION['authadm']= true;
    }else{
        print("no hay usuarios");
    }

    if(isset($_SESSION['authadm']) && ($_SESSION['authadm']==true)){
        print("existe");
        header("Location:index.php");
        }else{
            print("no existe");
            header("Location:inicioS.php?error=true");
        }
    }else{



    if(isset($_SESSION['authuse']) && ($_SESSION['authuse']==true)){
            print("existe");
            header("Location:index.php");
            }else{
                print("no existe");
                header("Location:inicioS.php?error=true");
            }
        }

}
                              
		
?>
