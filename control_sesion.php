<?php 

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
?>