<?php
 $conectar = mysqli_connect('localhost','firy','123456','paginaweb');

 if(!$conectar){
     echo "No conectado";
 }

 $Nombre = $_POST['Nombre'];
 $Cedula = $_POST['Cedula'];
 $Telefono = $_POST['Telefono'];
 $Correo = $_POST['Correo'];
 $Direccion = $_POST['Direccion'];

 $sql = "INSERT INTO formulario (Nombre,Cedula,Telefono,Correo,Direccion)
  VALUES ('$Nombre', '$Cedula', '$Telefono', '$Correo', '$Direccion')";

 $ejecutar = mysqli_query($conectar, $sql);

 if(!$ejecutar){
     echo "Hay algun error";
 }else{
     echo "Datos almacenados correctamente";
 }
?>