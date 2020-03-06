<?php
  include_once 'conexion.php';

  $objeto = new Conexion();

  $conexion = $objeto->Conectar();

  $_POST = json_decode(file_get_contents("php://input"),true);

  $opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
  $id = (isset($_POST['id'])) ? $_POST['id'] : '';
  $marca = (isset($_POST['marca'])) ? $_POST['marca'] : '';
  $modelo = (isset($_POST['modelo'])) ? $_POST['modelo'] : '';
  $stock = (isset($_POST['stock'])) ? $_POST['stock'] : '';


  switch ($opcion) {
    case 1:
      // agregar
      $consulta = "INSERT INTO moviles(marca, modelo, stock)
      VALUES ('$marca', '$modelo', '$stock')";

      $result = $conexion->prepare($consulta);
      $result->execute();
    break;

    case 2:
      // editar...
      $consulta = "UPDATE moviles SET marca = '$marca', modelo = '$modelo',
      stock = '$stock' WHERE id = '$id'";

      $result = $conexion->prepare($consulta);
      $result->execute();
      $data = $result->fetchAll(PDO::FETCH_ASSOC);
    break;

    case 3:
      //borrar
      $consulta = "DELETE FROM moviles WHERE id='$id'";

      $result = $conexion->prepare($consulta);
      $result->execute();
    break;

    case 4:
      // listar...
      $consulta = "SELECT * FROM moviles";

      $result = $conexion->prepare($consulta);
      $result->execute();
      $data = $result->fetchAll(PDO::FETCH_ASSOC);
    break;
  }


  print json_encode($data, JSON_UNESCAPED_UNICODE);
  $conexion = NULL;
?>
