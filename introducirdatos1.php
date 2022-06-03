<?php
        include("conexion.php");
?>

<?php
if($_POST){
        $Nombres = $_POST['Nombre'];
        $Apellidos = $_POST['Apellido'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];
        $tarjeta = $_POST['tarjeta'];
        $Nomtar = $_POST['Nomtar'];
        $fecha = $_POST['fecha'];
        $Numseg = $_POST['Numseg'];
        $sql= "INSERT INTO membresia (Nombre,Apellido,correo,telefono,tarjeta,Nomtar,fecha,Numseg)
        VALUE ('$Nombres','$Apellidos','$correo','$telefono,'$tarjeta','$Nomtar,'$fecha','$Numseg')";

        if ($conexion->query($sql)=== TRUE){
                echo "Se insertaron los datos";
        }else{
                echo "Error: ". $sql . "<br>" . $conexion->error;
        }
        $conexion->close();
}


?>