<?php
        include("conexion.php");
?>

<?php
if($_POST){
        $Nombres = $_POST['Nombre'];
        $Apellidos = $_POST['Apellido'];
        $correo = $_POST['correo'];
        $contraseña = $_POST['contraseña'];
        $confcontraseña = $_POST['confcontraseña'];
        $sql= "INSERT INTO nuevousuario (Nombre,Apellido,correo,contraseña,confcontraseña)
        VALUE ('$Nombres','$Apellidos','$correo','$contraseña','$confcontraseña')";

        if ($conexion->query($sql)=== TRUE){
                echo "Se insertaron los datos";
        }else{
                echo "Error: ". $sql . "<br>" . $conexion->error;
        }
        $conexion->close();
}


?>