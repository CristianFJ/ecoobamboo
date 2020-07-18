<?php 

include("conexion.php");

if(isset($_POST['enviar2'])){
    if((strlen($_POST['usuario2'])) >=1 && (strlen($_POST['contra2'])) >=1 &&(strlen($_POST['contra3'])) >=1){
        $usuario2= trim($_POST['usuario2']);
        $contra2= trim($_POST['contra2']);
        $contra3= trim($_POST['contra3']);
        $consulta= "INSERT INTO datos(user1, pass0,pass1) VALUES ('$usuario2','$contra2','$contra3')";
        $resultado=mysqli_query($conex,$consulta);
        if($resultado){
            ?>
            <h3 class="ok">¡Te has inscrito correctamente!</h3>
            <?php 
          
        }else{
             ?>
            <h3 class="bad">¡Ups!</h3>
            <?php 
        }
    }else{
        ?>
            <h3 class="bad">Completa los campos!</h3>
        <?php 
        }
}
	/*session_start();$_POST['usuario']
	$_SESSION['user'] = $_POST['usuario'];
	$_SESSION['pass'] = $_POST['contrasena'];
	$_SESSION['user2'] = $_POST['usuario2'];
	$_SESSION['pass2'] = $_POST['contra2'];
	$_SESSION['pass3'] = $_POST['contra3'];


if ($_SESSION['pass2']== $_SESSION['pass3']) {

echo( '¡La contraseña es válida!');
header("Location: index.php ");
 } else {
header("Location: inicioS.php ");
session_destroy();
echo( '¡La contraseña no es válida!');
}
    */                                    
		
?>